
// ウィンドウサイズを検知して画像ファイル名を置換する
$(function () {
    //変数セット
    var $elem = $('.change');
    var sp = '_sp.';
    var pc = '_pc.';
    var replaceWidth = 768;
    function imageSwitch() {
        var windowWidth = parseInt($(window).width());
        $elem.each(function () {
            var $this = $(this);
            if (windowWidth >= replaceWidth) {
                $this.attr('src', $this.attr('src').replace(sp, pc));
            } else {
                $this.attr('src', $this.attr('src').replace(pc, sp));
            }
        });
    }
    imageSwitch();
    var delayStart;
    var delayTime = 200; //ミリSec
    $(window).on('resize', function () {
        clearTimeout(delayStart);
        delayStart = setTimeout(function () {
            imageSwitch();
        }, delayTime);
    });
});

// カレント
$(function () {
    $('li a').each(function () {
        var $href = $(this).attr('href');
        if (location.href.match($href)) {
            $(this).parent().addClass('current');
        } else {
            $(this).parent().removeClass('current');
        }
    });
});

// first-vの背景画像のパララックス
$(window).on('load resize', function () {
    var target1 = $(".js-Parallax");
    var targetPosOT1 = target1.offset().top;
    var targetFactor = 0.3;
    var windowH = $(window).height();
    var scrollYStart1 = targetPosOT1 - windowH;
    $(window).on('scroll', function () {
        var scrollY = $(this).scrollTop();
        if (scrollY > scrollYStart1) {
            target1.css('background-position-y', (scrollY - targetPosOT1) * targetFactor + 'px');
        }
    });

});


// マウスオーバーで画像を切り替え
$(function () {
    $(".over").mouseover(function () {
        $(this).children('img').attr("src", $(this).children("img").attr("src").replace(/^(.+)(\.[a-zA-Z]+)$/, "$1_on$2"))
    }).mouseout(function () {
        $(this).children('img').attr("src", $(this).children("img").attr("src").replace(/^(.+)_on(\.[a-zA-Z]+)$/, "$1$2"));
    })
});
