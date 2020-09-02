//上传图片
var uploadObj=new upload();
uploadObj.createView({
    parent:document.querySelector(".upload")
})
uploadObj.up("/JEWELLERY/index.php/admin/dynamic/uploadfile",function (e) {
    $("input[type=hidden]").val(e[0]);
})

$.ajax({
    url:"/JEWELLERY/index.php/admin/dynamic/getOption",
    dataType:"json",
    success:function (e) {
        tree(e);
        $("#tid").html(str);
        str="";
    }
})

var str="";

function tree(data){
    for(var i=0;i<data.length;i++){
        str+="<option value='"+data[i].cid+"'>"+data[i].cname+"</option>";
    }
}

