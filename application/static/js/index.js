$(function () {
    var num=0;
    $(".more").click(function () {
        num++;
        if(num%2==0){
            $(this).css({
                transform:"rotate(0)",
            })
            $(this).parents(".father").css({
                animation: "show2 1s 1 forwards"
            })
        }else {
            $(this).css({
                transform:"rotate(90deg)",
            })
            $(this).parents(".father").css({
                animation: "show 1s 1 forwards"
            })
        }
    })
})
