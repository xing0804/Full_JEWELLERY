<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 17:07:27
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addSeries.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bdccfda8b28_32986514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '407403db42e9a372dbafbff85faab03ed14c91a9' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addSeries.html',
      1 => 1598806846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bdccfda8b28_32986514 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加系列</title>
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
    <form action="/JEWELLERY/index.php/admin/series/addSer" method="post">

        <div class="form-group">
            <label for="xname">系列名称</label>
            <input type="text" class="form-control" id="xname" name="xname" placeholder="系列名称">
        </div>
        <div class="form-group">
            <label for="xmsg">系列介绍</label>
            <textarea class="form-control" id="xmsg" name="xmsg" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addSer.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
