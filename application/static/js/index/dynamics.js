window.onload = function () {
    //导航移动
    //获取导航
    var navs = document.querySelectorAll(".navbox ul li");
    var line = document.querySelectorAll(".underline")

    for (let i = 0; i < navs.length; i++) {
        navs[i].onmouseover = function () {
            
            line[i].style.display = "block";
        }
        navs[i].onmouseout = function () {
            line[i].style.display = "none";
        }
    }

    //标题底线显示
    var linebox=document.querySelectorAll(".item-content");
    var titleLine=document.querySelectorAll(".item-title");
    for(let i=0;i<linebox.length;i++){
        linebox[i].onmouseover=function(){
            titleLine[i].style.borderBottom="1px solid rgb(212, 212, 212)";
        }
        linebox[i].onmouseout=function(){
            titleLine[i].style.borderBottom="none";
        }
        
    }

    //照片放大
    //获取照片容器
    var imgboxs=document.querySelectorAll(".img");
    var imgs=document.querySelectorAll(".img img");
    // console.log(imgboxs.length);
    for(let i=0;i<imgboxs.length;i++){
       
        imgboxs[i].onmouseover=function(){
            imgs[i].style.animation="imgover 2s forwards";
        }
        imgboxs[i].onmouseout=function(){
            imgs[i].style.animation="none";
        }
    }

    //标签 颜色
    var label=document.querySelectorAll(".search-label a");
    var labelSpan=document.querySelectorAll(".search-label a span");
    console.log(label);
    for(let i=0;i<label.length;i++){
        label[i].onmouseover=function(){
            labelSpan[i].style.color="#000";
        }
        label[i].onmouseout=function(){
            labelSpan[i].style.color="#999";
        }
    }


    //返回顶部按钮显示
    var topbtn=document.querySelector(".top");

    window.onscroll=function(){
        var st = document.documentElement.scrollTop;
        if(st>200){
            topbtn.style.opacity=1;
        }else{
            topbtn.style.opacity=0;
        }

        //点击效果
        topbtn.onclick=function(){
            console.log("back");
            animate(document.documentElement, {
                scrollTop: 0
            }, 500);
        }
    };

    //查看更多
    // var morebtn=document.querySelector(".more");
    // var conList=document.querySelector(".con-list");
    // var main=document.querySelector(".main");
    // console.log(main);
    // morebtn.onclick=function(){
    //     morebtn.style.display="none";
    //     main.style.height="1350px"
    //     conList.style.height="1350px";
    // }

    //标签点击切换内容
    var as=document.querySelectorAll(".search-label a");
    for(let j=0;j<as.length;j++){
        as[j].onclick=function(){
            var tid=$(this).attr("tid");
            console.log(tid);
            $.ajax({
                url:"/JEWELLERY/index.php/index/index/DymList?tid="+tid,
                dataType:"json",
                success(e){
                    console.log(e);
                    $(".con-list").html(e);
                },
                error(){
                    console.log("error");
                }
            });
            // var high=document.querySelector(".con-list").offsetHeight;
            // document.querySelector(".main").style.height=high+"px";
        }
    }

    //搜索
    $(".searchBtn").click(function () {
        let searchName=$(".searchCon").val();
        console.log(searchName);
        $.ajax({
            url:"/JEWELLERY/index.php/index/index/searchDym",
            data:{searchName:searchName},
            success(e){
                console.log(e);
                $(".con-list").html(e);
            }
        })
    })

    
}