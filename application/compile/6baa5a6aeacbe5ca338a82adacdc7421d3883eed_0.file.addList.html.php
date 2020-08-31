<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 00:40:24
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4c46f84ab101_86157867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6baa5a6aeacbe5ca338a82adacdc7421d3883eed' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addList.html',
      1 => 1598834122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c46f84ab101_86157867 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加类型</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <form action="/JEWELLERY/index.php/admin/type/addList" method="post">

        <div class="form-group">
            <label for="lname">类型名称</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="类型名称">
        </div>
        <div class="form-group">
            <label for="lmsg">类型介绍</label>
            <textarea class="form-control" id="lmsg" name="lmsg" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html><?php }
}
