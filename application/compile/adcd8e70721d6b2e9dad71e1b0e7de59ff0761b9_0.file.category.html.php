<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:22:15
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e915754ab71_06673337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adcd8e70721d6b2e9dad71e1b0e7de59ff0761b9' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\category.html',
      1 => 1598982322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e915754ab71_06673337 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>栏目管理</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="/JEWELLERY/index.php/admin/category/add" method="post" style="margin-top: 30px;margin-bottom: 30px">
            <input type="text" placeholder="添加一级栏目" name="cname">
            <input type="submit" value="添加">
        </form>
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <table class='table table-bordered'>
            <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </table>

        <?php } else { ?>
        <table class="table table-bordered">
            <tr>
                <td colspan="3">没有数据</td>
            </tr>
        </table>
        <?php }?>
    </div>
    <style>
        .pannel{
            width: 40%;
            height: 30%;
            background-color: #fff;
            box-shadow: 0 0 4px #000;
            position: absolute;
            left: 0;top: 0;right: 0;bottom: 0;
            margin: auto;
            z-index: 2;
            display: none;
            padding: 1%;
        }
    </style>
    <div class="pannel addpannel">
        <div class="close">
            X
        </div>
        <form action="/JEWELLERY/index.php/admin/category/add" method="post">
            <input type="text" name="cname">
            <input type="hidden" name="cid">
            <input type="submit" value="提交">
        </form>
    </div>

    <div class="pannel editpannel">
        <div class="close">
            X
        </div>
        <form action="/JEWELLERY/index.php/admin/category/add" method="post">
            <input type="text" name="cname">
            <select name="lid" id="opts">

            </select>
            <input type="button" value="修改">
        </form>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
