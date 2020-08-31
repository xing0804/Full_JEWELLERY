<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 16:00:07
  from 'D:\Full_Stack\php\server\8.17\mvc\application\template\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f468707785895_44688154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40f6beedd3efaa4160890c24818ea00f455f8f43' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\8.17\\mvc\\application\\template\\category.html',
      1 => 1598457604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f468707785895_44688154 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>栏目管理</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="/8.17/mvc/index.php/admin/category/add" method="post" style="margin-top: 30px;margin-bottom: 30px">
            <input type="text" placeholder="添加一级栏目" name="cname">
            <input type="submit" value="添加">
        </form>
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <table class="table table-bordered">
            <tr>
                <th>层级</th>
                <th>分类名称</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td>一级分类</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
                <td>添加</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr>
                <td>二级分类</td>
                <td>↓项目</td>
                <td>添加</td>
            </tr>
            <tr>
                <td>三级分类</td>
                <td>↓↓项目</td>
                <td>添加</td>
            </tr>
        </table>
        <?php } else { ?>
        <table class="table table-bordered">
            <tr>
                <td colspan="3">没有数据</td>
            </tr>
        </table>
        <?php }?>
    </div>
</body>
</html><?php }
}
