
$(document).ready(function () {

    var division = 5;//分割数
    var divlength = $('.contents').length;//要素数

    var numofdiv = divlength/division;

    for(var i = 1; i<numofdiv;i++){
        $('.contents').eq(division*i-1)
            .after('<button class="moreText">もっと見る</button>');//もっと見るボタンの配置
    }

    $('.contents,.moreText').hide();//一度全部隠す。

    for(var j =0;j<division;j++){//一個目を表示
        $('.contents').eq(j).show();
    }
    $('.moreText').eq(0).show();

    //クリック時の動作
    $('.moreText').click(function () {
        var index = $(this).index('.moreText');//何個目のやつか判断

        for(var k=0; k<(index+2)*division;k++){
        $('.contents').eq(k).fadeIn();
    }

    $('.moreText').hide();//位置全てのボタンを削除

    $('.moreText').eq(index+1).show();


    });

    //li要素をクリックしたら拡大
    $(".contents").click(
        function () {
            $(this).blur();
            if ($("#modal-overlay")[0]) return false;

            $(".board").append('<div id="modal-overlay"></div>');

            $("#modal-overlay").fadeIn("slow");

            //クリックされた値を検索し、extensionに代入
            var value = $(this).text();
            $("#extension").text(value);

            $("#modal-content").fadeIn("slow");

        });


    //センタリングする関数
    function centeringModalSyncer() {
        var w = $(window).width();
        var h  = $(window).height();
        var cw = $("#modal-content").outerWidth({margin:true});
        var ch = $("#modal-content").outerHeight({margin:true});
        var pxleft = ((w-cw)/2);
        var pxtop = ((h-ch)/2);

        $("#modal-content").css({"left":pxleft+"px"});

        $("#modal-content").css({"top":pxtop+"px"});

    }

    //詳細画面を閉じる
    $("#modal-overlay,#modal-close").unbind().click(function () {
        $("#extentsion").text('');
        $("#modal-overlay,#modal-content").fadeOut("slow",function () {
            $("#modal-overlay").remove();

        });
        
    });
    
    

});