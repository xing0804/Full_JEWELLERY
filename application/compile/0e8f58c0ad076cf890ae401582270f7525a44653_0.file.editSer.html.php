<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 17:14:20
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\editSer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bde6c2ee127_47679736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8f58c0ad076cf890ae401582270f7525a44653' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\editSer.html',
      1 => 1598807589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bde6c2ee127_47679736 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改系列</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addCon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <form action="/JEWELLERY/index.php/admin/series/editSer" method="post">

        <div class="form-group">
            <label for="xname">系列名称</label>
            <input type="text" class="form-control" id="xname" name="xname" placeholder="系列名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['xname'];?>
" readonly>
        </div>
        <div class="form-group">
            <label for="xmsg">系列介绍</label>
            <textarea class="form-control" id="xmsg" name="xmsg" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['xmsg'];?>
</textarea>
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addSer.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
