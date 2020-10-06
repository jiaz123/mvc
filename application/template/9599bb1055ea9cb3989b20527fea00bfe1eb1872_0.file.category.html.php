<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 02:36:37
  from 'C:\wamp64\www\study\mvc\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6ea935be0638_79687411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9599bb1055ea9cb3989b20527fea00bfe1eb1872' => 
    array (
      0 => 'C:\\wamp64\\www\\study\\mvc\\application\\template\\admin\\category.html',
      1 => 1601087794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6ea935be0638_79687411 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/category.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container">
    <form action="/study/mvc/index.php/admin/category/add" style="margin-top: 30px;border-bottom: 30px" method="post">
        <input type="text" placeholder="添加一级栏目" name="cname">
        <input type="submit" value="添加">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered table-striped">
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
    <table>
        <tr>
            <td>
                没有数据
            </td>
        </tr>
    </table>
    <?php }?>
</div>
<div class="pannel addpannel">
    <div class="close">
        X
    </div>
    <form action="/study/mvc/index.php/admin/category/add" method="post">
        <input type="text" name="cname">
        <input type="hidden" name="cid">
        <input type="submit" value="提交">
    </form>
</div>
<div class="pannel editpannel">
    <div class="close">
        X
    </div>
    <form action="/study/mvc/index.php/admin/category/add" method="post">
        <input type="text" name="cname">
        <select name="pid" id="opts">

        </select>
        <input type="button" value="修改" >
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/category.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
