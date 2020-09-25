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
            }, 2000);
        }
    }

    //搜索框实现
    $(".searchBtn").click(function () {
        let searchName=$(".searchCon").val();
        console.log(searchName);
        let tid=$(".con-top").attr('tid');
        console.log(tid);
        $.ajax({
            url:"/JEWELLERY/index.php/index/index/typeSearchPro",
            data:{searchName:searchName,tid:tid},
            success(e){
                // console.log(e);
                var num=parseInt(e.substr(e.length-2,2));
                // console.log(num);
                var stre=e.substring(0,e.length-3);
                var high=Math.ceil(num/4)*460;
                // console.log(high);
                if(high<1400){
                    $(".con-main").html(stre).css({
                        "height":high+"px"
                    });
                    $(".more").css("display","none");
                }else {
                    $(".con-main").html(stre).css({
                        "height":"1400px"
                    });
                    $(".more").css("display","block");
                }
            }
        })
    })

}