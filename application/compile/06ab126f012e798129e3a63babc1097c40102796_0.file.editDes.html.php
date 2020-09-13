<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 10:42:25
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\editDes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f560e913a1748_99907395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06ab126f012e798129e3a63babc1097c40102796' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\editDes.html',
      1 => 1599475252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f560e913a1748_99907395 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-bottom: 200px;margin-top: 30px">
    <form action="/JEWELLERY/index.php/admin/designer/editDes?did=<?php echo $_smarty_tpl->tpl_vars['data']->value['did'];?>
" method="post">
        <div class="form-group">
            <label for="dname">设计师姓名</label>
            <input type="text" class="form-control" id="dname" name="dname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dname'];?>
">
        </div>
        <div class="form-group">
            <label for="dposition">设计师职位</label>
            <input type="text" class="form-control" id="dposition" name="dposition" placeholder="动态标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dposition'];?>
">
        </div>
        <div class="form-group seeImg">
            <label for="dimgurl">设计师图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['dimgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="dimgurl">
        </div>

        <div class="form-group editImg" style="display: none;margin-bottom: 20px" imgFlag="false">
            <label for="dimgurl">设计师图片</label>
            <input type="hidden" value="hidden" name="dimgurl">
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
