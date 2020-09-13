<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 12:02:55
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\editDym.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58c46f088608_84143368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b84cb002b652f10befdec43617f36d5e3f74d66' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\editDym.html',
      1 => 1599068666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58c46f088608_84143368 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-bottom: 200px">
    <form action="/JEWELLERY/index.php/admin/dynamic/editDym?did=<?php echo $_smarty_tpl->tpl_vars['data']->value['did'];?>
" method="post">
        <div class="form-group">
            <label for="tid">动态类型</label>
            <select class="form-control" id="tid" name="tid" tid="<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
">

            </select>
        </div>
        <div class="form-group">
            <label for="dtitle">动态标题</label>
            <input type="text" class="form-control" id="dtitle" name="dtitle" placeholder="动态标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dtitle'];?>
">
        </div>
        <div class="form-group">
            <label for="dmsg">动态内容</label>
            <textarea class="form-control" id="dmsg" name="dmsg" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['dmsg'];?>
</textarea>
        </div>
        <div class="form-group seeImg">
            <label for="dimgurl">动态图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['dimgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="dimgurl">
        </div>

        <div class="form-group editImg" style="display: none;margin-bottom: 20px" imgFlag="false">
            <label for="dimgurl">动态图片</label>
            <input type="hidden" value="hidden" name="dimgurl">
            <div class="upload"></div>
        </div>


        <button type="button" class="btn btn-default editbtn">修改图片</button>
        <br><br>

        <button type="submit" class="btn btn-default">修改</button>

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

    $.ajax({
        url:"/JEWELLERY/index.php/admin/dynamic/getOption",
        dataType:"json",
        success:function (e) {
            var tid=$("#tid").attr("tid");
            console.log(tid);
            tree(e,tid);
            $("#tid").html(str);
            str="";
        }
    })

    var str="";

    function tree(data,tid){
        for(var i=0;i<data.length;i++){
            if(tid!=undefined){
                if(tid==data[i].cname){
                    str+="<option value='"+data[i].cid+"' selected>"+data[i].cname+"</option>";
                }else {
                    str+="<option value='"+data[i].cid+"'>"+data[i].cname+"</option>";
                }
            }else {
                str+="<option value='"+data[i].cid+"'>"+data[i].cname+"</option>";
            }

        }
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
