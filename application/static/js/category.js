$(".add").click(function () {
    var cid=$(this).attr("attr");
    var lid=$(this).attr("lid");   $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:.3,
        background:"#000",
        position:"absolute",
        lefe:0,
        top:0,
    })
    $(".addpannel").css("display","block")
})

$(".addpannel .close").click(function () {
    $(".addpannel").css("display","none");
    $(".mask").remove();
})

//修改
var cid;
$(".edit").click(function () {
    cid=$(this).attr("attr");
    var lid=$(this).attr("lid");

    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:.3,
        background:"#000",
        position:"absolute",
        lefe:0,
        top:0,
    })
    $(".editpannel").css("display","block")

    //修改信息查询
    $.ajax({
        url:"/JEWELLERY/index.php/admin/category/show",
        data:{cid},
        dataType:"json",
        success:function (e) {
            $(".editpannel input[name=cname]").val(e["cname"]);
        }
    })

    $.ajax({
        url:"/JEWELLERY/index.php/admin/category/getOption",
        dataType:"json",
        success:function (e) {
            tree(e,1,cid,lid);
            $("#opts").html(str);
            str="";
        }
    })

})

//修改内容
$(".editpannel input[type=button]").click(function () {
    //序列化
    var data=($(".editpannel form").serialize()+"&cid="+cid);
    $.ajax({
        url:"/JEWELLERY/index.php/admin/category/editcon",
        data:data,
        success:function (e) {
            if($.trim(e)=="ok"){
               location.reload();
            }
        }
    })
})

var str="";

function str_repeat(str,num) {
    var result="";
    for(var i=0;i<num;i++){
        result+=str;
    }
    return result;
}

function tree(data,$i,cid,lid){

    for(var i=0;i<data.length;i++){
        if(data[i].child){
            if(data[i].cid!=cid){
                if(data[i].cid==lid){
                    str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp&nbsp",$i)+data[i].cname+"</option>";
                }else {
                    str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp&nbsp",$i)+data[i].cname+"</option>";
                }

            }

            tree(data[i].child,$i+1,cid,lid);
        }else {
            if(data[i].cid!=cid){
                if(data[i].cid==lid){
                    str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp&nbsp",$i)+data[i].cname+"</option>";
                }else {
                    str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp&nbsp",$i)+data[i].cname+"</option>";
                }
            }

        }

    }
}

$(".editpannel .close").click(function () {
    $(".editpannel").css("display","none");
    $(".mask").remove();
})

