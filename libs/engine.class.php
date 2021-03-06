<?php
class engine{
    //第一步获取原始数据
    //编译
    //显示到页面当中
    //分配变量
    private $templateDir = "template";
    private $compileDir = "compile";
    private $cacheDir = "cache";
    public $cache = false;

    private $arr = array();

    private function getData($file){
        $destfile = $this->templateDir.$file;
        if(is_file($destfile)){
            return $this->con=file_get_contents($destfile);
        }else{
            die("this template not found");
        }
    }
    public function setTemplateDir($path){
        $this->templateDir=$path;
    }
    public function setCompileDir($path){
        $this->compileDir=$path;
    }
    public function setCacheDir($path){
        $this->cacheDir=$path;
    }

    private function compile($file){
        $con = $this->getData($file);
        $reg = '/\{(\$[a-zA-Z][^\}]*)\}/';
        $one = preg_replace_callback($reg,function ($val){
            return "<?php echo ".$val[1]." ?>";
        },$con);//变量解析完了

        //解析foreach
        $reg1 = '/\{foreach([^\}]*)\}/';
        $two = preg_replace_callback($reg1,function ($val){
            return '<?php foreach ('.$val[1].'){ ?>';
        },$one);//foreach 的开始解析完了

        $reg2 = '/\{\/foreach\}/';
        $three = preg_replace_callback($reg2,function ($val){
            return '<?php } ?>';
        },$two);

        return $three;
    }

    function display($file){

        $outFileName = $this->compileDir.basename($file,".html").".php";
        $cacheFileName = $this->cacheDir.basename($file,".html").".htm";

        $inFileName = $this->templateDir.$file;

        if($this->cache&&is_file($cacheFileName)&&filemtime($cacheFileName)>filemtime($inFileName)){
            include_once $cacheFileName;
        }else{
            if(is_file($outFileName)&&filemtime($outFileName)>filemtime($inFileName)){
                foreach ($this->arr as $k => $v){
                    $$k = $v;
                }
                include_once $outFileName;
            }else{
                $result = $this->compile($file);

                file_put_contents($outFileName,$result);

                foreach ($this->arr as $k=>$v){
                    $$k = $v;
                }

                if($this->cache){
                    ob_start();
                    include_once $outFileName;
                    $con = ob_get_contents();
                    file_put_contents($cacheFileName,$con);
                    ob_end_flush();
                }else{
                    include_once $outFileName;
                }

            }
        }
    }
    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }

}