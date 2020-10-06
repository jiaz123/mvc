<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 08:33:02
  from 'C:\wamp64\www\study\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6efcbe286353_82947429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f076d863c0c71a6baf53ecb444e72e5bcaf1a8' => 
    array (
      0 => 'C:\\wamp64\\www\\study\\mvc\\application\\template\\admin\\index.html',
      1 => 1601108200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6efcbe286353_82947429 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">
</head>
<body>
    <div class="header">
        <div class="headerlogo">
            <a href="http://localhost/study/mvc/index.php/index/index"  target="_blank">
                <img src="<?php echo IMG_ADD;?>
logo.png" alt="" class="img">
            </a>
        </div>
        <div class="logininfo">
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
            <span>
                <a href="/study/mvc/index.php/admin/index/logout">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    <h3>用户管理</h3>
                    <ul class="son">
                        <li>
                            <a href="adduser" target="main">添加用户</a></li>
                        <li>
                            <a href="edituser" target="main">修改用户</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h3>栏目管理</h3>
                    <ul class="son">
                        <li><a href="/study/mvc/index.php/admin/category/" target="main">添加栏目</a></li>
                        <li><a href="/study/mvc/index.php/admin/category/edit" target="main">修改栏目</a></li>
                    </ul>
                </li>

                <li>
                    <h3>内容管理</h3>
                    <ul class="son">
                        <li><a href="/study/mvc/index.php/admin/content/" target="main">查看内容</a></li>
                        <li><a href="/study/mvc/index.php/admin/content/edit" target="main">修改内容</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main"></iframe>
        </div>
    </div>
    <div class="bottom">
        <span>衡源金属后台管理</span>
    </div>
</body>
</html><?php }
}
