<?php
class main{
    function __construct()
    {
        global $config;
        // smarty 配置
        $smarty=new Smarty();
        $templateDir = isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"template";
        $compileDir = isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"compile";
        $cacheDir = isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"cache";
        $smarty->setTemplateDir($templateDir);
        $smarty->setCompileDir($compileDir);
        $smarty->setCacheDir($cacheDir);

        $this->smarty=$smarty;

        // 数据库配置
        $host=isset($config["database"]["host"])?$config["database"]["host"]:"localhost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"";
        $dbname=isset($config["database"]["daname"])?$config["database"]["dbmame"]:"test";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:"3308";
        $db=new mysqli($host,$username,$password,$dbname,$port);
        if ($db->connect_error){
            echo "数据库链接出错";
        }
        $db->query("set names utf8");
        $this->db=$db;
    }
}