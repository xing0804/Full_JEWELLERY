<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 12:15:37
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\editHomeType.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5775e9eba6f6_58312271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2e801911015c36364cc60468cec5b52f768936' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\editHomeType.html',
      1 => 1599566685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5775e9eba6f6_58312271 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-bottom: 200px;margin-top: 30px">
    <form action="/JEWELLERY/index.php/admin/homeType/editHomeType?hid=<?php echo $_smarty_tpl->tpl_vars['data']->value['hid'];?>
" method="post">
        <div class="form-group">
            <label for="name">类型中文名</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
        </div>
        <div class="form-group">
            <label for="ename">类型英文名</label>
            <input type="text" class="form-control" id="ename" name="ename" placeholder="类型英文名" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ename'];?>
">
        </div>
        <div class="form-group seeImg">
            <label for="himgurl">类型图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['himgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="himgurl">
        </div>

        <div class="form-group editImg" style="display: none;margin-bottom: 20px" imgFlag="false">
            <label for="himgurl">设计师图片</label>
            <input type="hidden" value="hidden" name="himgurl">
            <div class="upload"></div>
        </div>


        <button type="button" class="btn btn-default editbtn" style="margin-top: 20px">修改图片</button>
        <br><br>

        <button type="submit" class="btn btn-default" style="margin-top: 20px">修改</button>

    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //上传图片
    var uploadObj=new upload();

    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.selectBtn.parentNode.style.lineHeight="50px";
    uploadObj.upBtn.style.lineHeight="50px";
    uploadObj.up("/JEWELLERY/index.php/admin/dynamic/uploadfile",function (e) {
        $("input[type=hidden]").val(e[0]);
    })

    $(".editbtn").click(function () {
        $(".seeImg").css("display","none");
        $(".editImg").css("display","block").attr("imgFlag","true");
    })


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
