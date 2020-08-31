<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:57:24
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\addCon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba23471c039_77842373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d068731d967d22194dfdb42158d9fc61929bb6' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\addCon.html',
      1 => 1598791654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba23471c039_77842373 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加内容</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addCon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <form action="/JEWELLERY/index.php/admin/product/addCon" method="post">
        <div class="form-group">
            <label for="lid">所属分类</label>
            <select class="form-control" id="lid" name="lid">
                <option>戒指</option>
                <option>耳环/耳钉</option>
                <option>项链/吊坠</option>
                <option>手镯/手链</option>
            </select>
        </div>
        <div class="form-group">
            <label for="xid">所属系列</label>
            <select class="form-control" id="xid" name="xid">
                <option>一生一世</option>
                <option>几何系列</option>
                <option>字母系列</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pname">产品名称</label>
            <input type="text" class="form-control" id="pname" name="pname" placeholder="产品名称">
        </div>
        <div class="form-group">
            <label for="pprice">产品价格</label>
            <input type="text" class="form-control" id="pprice" name="pprice" placeholder="产品价格">
        </div>
        <div class="form-group">
            <label for="pmsg">产品介绍</label>
            <textarea class="form-control" id="pmsg" name="pmsg" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="pno">产品编号</label>
            <input type="text" class="form-control" id="pno" name="pno" placeholder="产品编号">
        </div>
        <div class="form-group">
            <label for="pmeterial">产品材质</label>
            <input type="text" class="form-control" id="pmeterial" name="pmeterial" placeholder="产品材质">
        </div>
        <div class="form-group">
            <label for="pcolor">产品颜色</label>
            <input type="text" class="form-control" id="pcolor" name="pcolor" placeholder="产品颜色">
        </div>
        <div class="form-group">
            <label for="pmain">主体信息</label>
            <textarea id="pmain" name="pmain"></textarea>
        </div>
        <div class="form-group">
            <label for="ppack">包装清单</label>
            <input type="text" class="form-control" id="ppack" name="ppack" placeholder="包装清单">
        </div>
        <div class="form-group">
            <label for="psaleback">售后保障</label>
            <textarea class="form-control" id="psaleback" name="psaleback" rows="3"></textarea>
        </div>
        <input type="hidden" value="hidden" name="pimgurl">
        <div class="upload"></div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addCon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
