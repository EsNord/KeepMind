$(document).ready(function () {
    $('.toggle-butt').click(function () {
        if($(this).parent().css('left').toString()=="-300px"){
            console.log($(this).parent().css('left').toString());
            $(this).parent().animate({
                left:'0'
            },100)
            $('body').animate({
                paddingLeft:'190px'
            },100);
            $('.arrow-but-ico').css({
                transform:'rotate(180deg)'
            });
        }
        else{
            console.log($(this).parent().css('left').toString());
            $(this).parent().animate({
                left:'-300px'
            },100)
            $('body').animate({
                paddingLeft:'0px'
            },100);
            $('.arrow-but-ico').css({
                transform:'rotate(0deg)'
            });
        }
    });


});