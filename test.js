$(function(){
    //文字数のカウントダウン
    var countmax = 80;
    $('textarea').bind('keydown keyup keypress change',function () {
        var thisValuelength = $(this).val().length;

        var countdown = countmax-thisValuelength;
        $('.count').html(countdown);

        if(countdown<0){
            $('.count').css({color:'#f00',fontWeight:'bold'});
        }else{
            $('.count').css({color:'#fff',fontWeight:'normal'});
        }
    });

    $(window).load(function () {
        $('.count').html(countmax);

    });

});