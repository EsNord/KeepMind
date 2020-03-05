$(document).ready(function () {
    $(document).ready(function () {
        $(window).on('scroll',function (e) {
            if($(this).scrollTop()>0){
                $('.main-nav').css({
                    backgroundColor:'rgba(17, 117, 226, 0.91)'
                })
            }
            else if($(window).scrollTop()==0){
                $('.main-nav').css({
                    backgroundColor:'transparent'
                })

            }
        })
    });

});