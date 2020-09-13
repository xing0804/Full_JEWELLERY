<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 12:35:42
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\showHomeType.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f577a9e138d76_45560673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef3db36e1faa1e08c866929c3787442eff5f954' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\showHomeType.html',
      1 => 1599568538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f577a9e138d76_45560673 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看主页类型</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 30px">
    <table class="table table-bordered">
        <tr>
            <th>类型中文名称</th>
            <th>类型英文名称</th>
            <th>图片类型</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ename"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["imgtype"];?>
</td>
            <td>
                <a href="/JEWELLERY/index.php/admin/homeType/edit?hid=<?php echo $_smarty_tpl->tpl_vars['v']->value['hid'];?>
">编辑</a>
                <a href="/JEWELLERY/index.php/admin/homeType/del?hid=<?php echo $_smarty_tpl->tpl_vars['v']->value['hid'];?>
">删除</a>
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
