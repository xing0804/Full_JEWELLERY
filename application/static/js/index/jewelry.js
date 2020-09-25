window.onload = function () {
    //导航移动
    //获取导航
    var navs = document.querySelectorAll(".navbox ul li");
    var line = document.querySelectorAll(".underline")
    // console.log(line);

    for (let i = 0; i < navs.length; i++) {
        navs[i].onmouseover = function () {
            line[i].style.display = "block";
        }
        navs[i].onmouseout = function () {
            line[i].style.display = "none";
        }
    }

    //查看更多
    var more=document.querySelector(".more");
    var con=document.querySelector(".con-list");
    more.onclick=function(){
        more.style.display="none";
        con.style.height="2500px";
    }

    //照片放大
    //获取照片容器
    var imgboxs=document.querySelectorAll(".img");
    var imgs=document.querySelectorAll(".img img");
    // console.log(imgboxs.length);
    for(let i=0;i<imgboxs.length;i++){
       
        imgboxs[i].onmouseover=function(){

            imgs[i].style.animation="imgover 2s";
        }
        imgboxs[i].onmouseout=function(){

            imgs[i].style.animation="none";
        }
    }

    //返回顶部按钮显示
    var topbtn=document.querySelector(".top");

    window.onscroll=function(){
        var st = document.documentElement.scrollTop;
        if(st>700){
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

    //标签选择产品
    var xilie=document.querySelectorAll(".xilie");
    var leibie=document.querySelectorAll(".leibie");
    let xid="all",lid="all";
    for (let i=0;i<xilie.length;i++){
        xilie[i].onclick=function () {
            xid=$(this).attr("xid");
            $(".xilie").css({
                "border": "none",
                "color": "#999",
            })
            $(this).css({
                "border": "1px solid #999",
                "color": "#000",
            })
            console.log(xid,lid);
            if(lid=="all"){
                $.ajax({
                    url:"/JEWELLERY/index.php/index/index/ProList",
                    data:{xid:xid,lid:"all"},
                    success(e){
                        console.log(e);
                        var num=parseInt(e.substr(e.length-2,2));
                        console.log(num);
                        var stre=e.substring(0,e.length-3);
                        var high=Math.ceil(num/4)*460;
                        console.log(high);
                        if(high<1400){
                            $(".con-list").html(stre).css({
                                "height":high+"px"
                            });
                            $(".more").css("display","none");
                        }else {
                            $(".con-list").html(stre).css({
                                "height":"1400px"
                            });
                            $(".more").css("display","block");
                        }

                    },
                    error(){
                        console.log("error");
                    }
                })
            }else {
                $.ajax({
                    url:"/JEWELLERY/index.php/index/index/ProList",
                    data:{xid:xid,lid:lid},
                    success(e){
                        console.log(e);
                        var num=parseInt(e.substr(e.length-2,2));
                        console.log(num);
                        var stre=e.substring(0,e.length-3);
                        var high=Math.ceil(num/4)*460;
                        console.log(high);
                        if(high<1400){
                            $(".con-list").html(stre).css({
                                "height":high+"px"
                            });
                            $(".more").css("display","none");
                        }else {
                            $(".con-list").html(stre).css({
                                "height":"1400px"
                            });
                            $(".more").css("display","block");
                        }

                    },
                    error(){
                        console.log("error");
                    }
                })
            }
        }
    }
    for (let i=0;i<leibie.length;i++){
        leibie[i].onclick=function () {
            lid=$(this).attr("lid");
            $(".leibie").css({
                "border": "none",
                "color": "#999",
            })
            $(this).css({
                "border": "1px solid #999",
                "color": "#000",
            })
            console.log(xid,lid);
            if(xid=="all"){
                console.log(lid);
                $.ajax({
                    url:"/JEWELLERY/index.php/index/index/ProList",
                    data:{xid:"all",lid:lid},
                    success(e){
                        console.log(e);
                        var num=parseInt(e.substr(e.length-2,2));
                        console.log(num);
                        var stre=e.substring(0,e.length-3);
                        var high=Math.ceil(num/4)*460;
                        console.log(high);
                        if(high<1400){
                            $(".con-list").html(stre).css({
                                "height":high+"px"
                            });
                            $(".more").css("display","none");
                        }else {
                            $(".con-list").html(stre).css({
                                "height":"1400px"
                            });
                            $(".more").css("display","block");
                        }

                    },
                    error(){
                        console.log("error");
                    }
                })
            }else {
                console.log(lid);
                $.ajax({
                    url:"/JEWELLERY/index.php/index/index/ProList",
                    data:{xid:xid,lid:lid},
                    success(e){
                        console.log(e);
                        var num=parseInt(e.substr(e.length-2,2));
                        console.log(num);
                        var stre=e.substring(0,e.length-3);
                        var high=Math.ceil(num/4)*460;
                        console.log(high);
                        if(high<1400){
                            $(".con-list").html(stre).css({
                                "height":high+"px"
                            });
                            $(".more").css("display","none");
                        }else {
                            $(".con-list").html(stre).css({
                                "height":"1400px"
                            });
                            $(".more").css("display","block");
                        }

                    },
                    error(){
                        console.log("error");
                    }
                })
            }
        }
    }
    $.ajax({
        url:"/JEWELLERY/index.php/index/index/ProList",
        data:{xid:xid,lid:lid},
        success(e){
            console.log(e);
            var num=parseInt(e.substr(e.length-2,2));
            console.log(num);
            var stre=e.substring(0,e.length-3);
            var high=Math.ceil(num/4)*460;
            console.log(high);
            if(high<1400){
                $(".con-list").html(stre).css({
                    "height":high+"px"
                });
                $(".more").css("display","none");
            }else {
                $(".con-list").html(stre).css({
                    "height":"1400px"
                });
                $(".more").css("display","block");
            }

        },
        error(){
            console.log("error");
        }
    });

    //搜索
    $(".searchBtn").click(function () {
        let searchName=$(".searchCon").val();
        console.log(searchName);
        $.ajax({
            url:"/JEWELLERY/index.php/index/index/searchProduct",
            data:{searchName:searchName},
            success(e){
                console.log(e);
                var num=parseInt(e.substr(e.length-2,2));
                console.log(num);
                var stre=e.substring(0,e.length-3);
                var high=Math.ceil(num/4)*460;
                console.log(high);
                if(high<1400){
                    $(".con-list").html(stre).css({
                        "height":high+"px"
                    });
                    $(".more").css("display","none");
                }else {
                    $(".con-list").html(stre).css({
                        "height":"1400px"
                    });
                    $(".more").css("display","block");
                }
            }
        })
    })


}