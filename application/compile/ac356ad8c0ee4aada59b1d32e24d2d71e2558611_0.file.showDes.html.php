<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 10:29:02
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\showDes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f560b6e7a55e4_86536446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac356ad8c0ee4aada59b1d32e24d2d71e2558611' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\showDes.html',
      1 => 1599474515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f560b6e7a55e4_86536446 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 30px">
    <table class="table table-bordered">
        <tr>
            <th>设计师姓名</th>
            <th>设计师职位</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["dname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["dposition"];?>
</td>
            <td>
                <a href="/JEWELLERY/index.php/admin/designer/seeDes?did=<?php echo $_smarty_tpl->tpl_vars['v']->value['did'];?>
">查看</a>
                <a href="/JEWELLERY/index.php/admin/designer/edit?did=<?php echo $_smarty_tpl->tpl_vars['v']->value['did'];?>
">编辑</a>
                <a href="/JEWELLERY/index.php/admin/designer/del?did=<?php echo $_smarty_tpl->tpl_vars['v']->value['did'];?>
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
