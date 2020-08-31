//上传图片
var uploadObj=new upload();
uploadObj.createView({
    parent:document.querySelector(".upload")
})
uploadObj.up("/JEWELLERY/index.php/admin/dynamic/uploadfile",function (e) {
    $("input[type=hidden]").val(e[0]);
})