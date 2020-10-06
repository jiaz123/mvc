<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 07:38:32
  from 'C:\wamp64\www\study\mvc\application\template\admin\content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6eeff8b094e5_77698605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55f10b37baf680fff48f3050ef29d4e985f6dbf1' => 
    array (
      0 => 'C:\\wamp64\\www\\study\\mvc\\application\\template\\admin\\content.html',
      1 => 1601105907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6eeff8b094e5_77698605 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/content.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <table class="table table-bordered">
            <tr>
                <td>所属栏目</td>
                <td>内容标题</td>
                <td>图片地址</td>
                <td>内容详情</td>
            </tr>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["cid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["imgurl"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>
</td>
            </tr>
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
</body>
</html><?php }
}
