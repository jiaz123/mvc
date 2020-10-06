<?php
header("content-type:text/html;charset=utf-8");
if(!defined("MVC")){
    die("访问路径不合法");
}

use libs\code;
class index extends main {
    function int()
    {
        $this->smarty->display("admin/login.html");
    }

    function login(){
        global $config;
        $user=addslashes($_POST["user"]);
        $pass=md5(md5($_POST["pass"]));
        if ($config["code"]["ischeck"]){
            if ($_POST["code"] !== $_SESSION["code"]){
                echo "验证码有误";
                return;
            }
        }

        if (strlen($user)<5 || empty($pass)){
            echo "用户名或密码不符合规范";
            return;
        }

        /*$db= @new mysqli("localhost","root","","test","3308");
        // 不希望用户看到数据库连接失败的具体信息
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }*/
        $db=$this->db;
        $db->query("set names utf8");
        $result = $db->query("select * from admin where user='$user' and pass = '$pass'");
        // 结果数据为空  则重新登陆
        if ($result->num_rows<1){
            echo "没有相应数据，请重新登录";
        }else {
           $_SESSION["login"]="yes";
           $_SESSION["user"]=$user;
            header("location:first");
        }
    }

    function logout(){
        session_destroy();
        header("location:/study/mvc/index.php/admin");
    }

    function first(){
        if(isset($_SESSION["login"])&& $_SESSION["login"] == "yes"){
            $this->smarty->assign("user",$_SESSION["user"]);
            $this->smarty->display("admin/index.html");
        }
    }

    function mycode(){
        $code=new code();
        $code->out();

    }

    function adduser(){
        $this->smarty->display('admin/adduser.html');
    }
    function edituser(){
        $this->smarty->display('admin/edituser.html');
    }


}