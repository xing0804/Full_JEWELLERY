<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 00:53:01
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4c49ed0abe27_46706139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24576aa8d77c736443185de4895f5cbee7038d5d' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\showList.html',
      1 => 1598834916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c49ed0abe27_46706139 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示类型</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 20px">
    <table class="table table-bordered">
        <tr>
            <th>类型名称</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</td>
            <td>
                <a href="/JEWELLERY/index.php/admin/type/del?lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">删除</a>
                <a href="/JEWELLERY/index.php/admin/type/edit?lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">编辑</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
</body>
</html><?php }
}
