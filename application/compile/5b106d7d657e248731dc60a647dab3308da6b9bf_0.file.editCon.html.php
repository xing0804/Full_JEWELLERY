<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 17:52:21
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\editCon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4fdbd50a71f1_86697094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b106d7d657e248731dc60a647dab3308da6b9bf' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\editCon.html',
      1 => 1599069119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4fdbd50a71f1_86697094 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form action="/JEWELLERY/index.php/admin/product/editCon?pid=<?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
" method="post">
        <div class="form-group">
            <label for="lid">所属分类</label>
            <select class="form-control" id="lid" name="lid" lid="<?php echo $_smarty_tpl->tpl_vars['data']->value['lid'];?>
">

            </select>
        </div>
        <div class="form-group">
            <label for="xid">所属系列</label>
            <select class="form-control" id="xid" name="xid" xid="<?php echo $_smarty_tpl->tpl_vars['data']->value['xid'];?>
">

            </select>
        </div>
        <div class="form-group">
            <label for="pname">产品名称</label>
            <input type="text" class="form-control" id="pname" name="pname" placeholder="产品名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pname'];?>
">
        </div>
        <div class="form-group">
            <label for="pprice">产品价格</label>
            <input type="text" class="form-control" id="pprice" name="pprice" placeholder="产品价格" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pprice'];?>
">
        </div>
        <div class="form-group">
            <label for="pmsg">产品介绍</label>
            <textarea class="form-control" id="pmsg" name="pmsg" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['pmsg'];?>
</textarea>
        </div>
        <div class="form-group">
            <label for="pno">产品编号</label>
            <input type="text" class="form-control" id="pno" name="pno" placeholder="产品编号" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pno'];?>
">
        </div>
        <div class="form-group">
            <label for="pmeterial">产品材质</label>
            <input type="text" class="form-control" id="pmeterial" name="pmeterial" placeholder="产品材质" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pmeterial'];?>
">
        </div>
        <div class="form-group">
            <label for="pcolor">产品颜色</label>
            <input type="text" class="form-control" id="pcolor" name="pcolor" placeholder="产品颜色" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pcolor'];?>
">
        </div>
        <div class="form-group">
            <label for="pmain">主体信息</label>
            <textarea id="pmain" name="pmain"><?php echo $_smarty_tpl->tpl_vars['data']->value['pmain'];?>
</textarea>
        </div>
        <div class="form-group">
            <label for="ppack">包装清单</label>
            <input type="text" class="form-control" id="ppack" name="ppack" placeholder="包装清单" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ppack'];?>
">
        </div>
        <div class="form-group">
            <label for="psaleback">售后保障</label>
            <textarea class="form-control" id="psaleback" name="psaleback" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['psaleback'];?>
</textarea>
        </div>
        <div class="form-group seeImg">
            <label for="pimgurl">动态图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['pimgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="pimgurl">
        </div>

        <div class="form-group editImg" style="display: none;margin-bottom: 20px">
            <label for="pimgurl">动态图片</label>
            <input type="hidden" value="hidden" name="pimgurl">
            <div class="upload"></div>
        </div>


        <button type="button" class="btn btn-default editbtn">修改图片</button>
        <br><br>

        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
editCon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
