<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 12:01:09
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addDym.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58c4057ef0f5_17199067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9d75ee3025eeb7b561291a45274c7d7b4f0aa2f' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addDym.html',
      1 => 1599652864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58c4057ef0f5_17199067 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container" style="margin-top: 30px">
    <form action="/JEWELLERY/index.php/admin/dynamic/addDym" method="post">
        <div class="form-group">
            <label for="tid">动态类型</label>
            <select class="form-control" id="tid" name="tid">

            </select>
        </div>
        <div class="form-group">
            <label for="dtitle">动态标题</label>
            <input type="text" class="form-control" id="dtitle" name="dtitle" placeholder="动态标题">
        </div>
        <div class="form-group">
            <label for="dmsg">动态内容</label>
            <textarea class="form-control" id="dmsg" name="dmsg" rows="3"></textarea>
        </div>
        <input type="hidden" value="hidden" name="dimgurl">
        <div class="upload"></div>

        <button type="submit" class="btn btn-success" style="margin-top: 20px">Submit</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addDym.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
