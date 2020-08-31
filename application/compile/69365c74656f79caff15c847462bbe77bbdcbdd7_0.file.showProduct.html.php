<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 14:47:14
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\showProduct.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bbbf2ade439_73734733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69365c74656f79caff15c847462bbe77bbdcbdd7' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\showProduct.html',
      1 => 1598798001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bbbf2ade439_73734733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示信息列表</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top: 20px">
        <table class="table table-bordered">
            <tr>
                <th>所属分类</th>
                <th>所属系列</th>
                <th>产品名称</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["xid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</td>
                <td>
                    <a href="/JEWELLERY/index.php/admin/product/show?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">查看</a>
                    <a href="/JEWELLERY/index.php/admin/product/edit?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
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
