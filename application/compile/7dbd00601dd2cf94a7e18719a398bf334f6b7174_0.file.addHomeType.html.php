<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 12:34:07
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addHomeType.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f577a3f07def5_43253106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dbd00601dd2cf94a7e18719a398bf334f6b7174' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addHomeType.html',
      1 => 1599568434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f577a3f07def5_43253106 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加设计师</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <form action="/JEWELLERY/index.php/admin/homeType/addHomeType" method="post" style="margin-top: 30px">
        <div class="form-group">
            <label for="name">类型中文名</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="类型中文名">
        </div>
        <div class="form-group">
            <label for="ename">类型英文名</label>
            <input type="text" class="form-control" id="ename" name="ename" placeholder="类型英文名">
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="imgtype" value="big" checked>
                大图
            </label>
            <label>
                <input type="radio" name="imgtype" value="small">
                小图
            </label>
        </div>
        <input type="hidden" value="hidden" name="himgurl">
        <div class="upload"></div>

        <button type="submit" class="btn btn-default" style="margin-top: 30px">Submit</button>
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
