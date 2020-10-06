<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 01:51:20
  from 'C:\wamp64\www\study\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e9e980d7e25_28358074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2c6707c72ec838d7436ae24683dc66ba940e6e5' => 
    array (
      0 => 'C:\\wamp64\\www\\study\\mvc\\application\\template\\admin\\login.html',
      1 => 1601085074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e9e980d7e25_28358074 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录我的后台</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/admin.js"><?php echo '</script'; ?>
>
    <style>
        body{
            background-image: url("https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1462841369,2966836788&fm=26&gp=0.jpg");
            background-size: 100% auto;
        }
    </style>
</head>
<body>
    <form class="form-horizontal" action="admin/index/login" method="post" style="height: 380px;">
        <h1>衡源金属后台管理</h1>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="user">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword4" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="请输入验证码" id="inputPassword4" name="code" style="width: 35%">
                <img src="http://localhost/study/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/study/mvc/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer" width="120px"><span style="font-size: 14px">看不清楚？点击更换</span></img>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">记住密码
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group" >
            <div class="col-sm-offset-2 col-sm-10" style="float:right;">
                <button type="submit" class="btn btn-default">登录</button>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
