<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 10:20:56
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addDes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5609880856a6_87219788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f403104a7558e3bc83d2d6248bf77b1dc12652f' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addDes.html',
      1 => 1599473892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5609880856a6_87219788 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form action="/JEWELLERY/index.php/admin/designer/addDes" method="post" style="margin-top: 30px">
        <div class="form-group">
            <label for="dname">设计师姓名</label>
            <input type="text" class="form-control" id="dname" name="dname" placeholder="设计师姓名">
        </div>
        <div class="form-group">
            <label for="dposition">设计师职位</label>
            <input type="text" class="form-control" id="dposition" name="dposition" placeholder="设计师职位">
        </div>
        <input type="hidden" value="hidden" name="dimgurl">
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
