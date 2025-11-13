$(function () {

    // 搜尋列 toggle
    $('#asus-search-toggle').on('click', function () {
        $('#asus-searchbar').stop(true, true).slideToggle(160);
    });

    // 桌機版：hover 展開 mega menu（兼容 Bootstrap 5）
    function bindDesktopMega() {
        if (window.matchMedia('(min-width: 992px)').matches) {
            $('.dropdown-mega').each(function () {
                var $dd = $(this);
                var $menu = $dd.find('.dropdown-menu').first();
                $dd.off('mouseenter mouseleave').on('mouseenter', function () {
                    $dd.addClass('show');
                    $menu.addClass('show');
                }).on('mouseleave', function () {
                    $dd.removeClass('show');
                    $menu.removeClass('show');
                });
            });
        } else {
            // 手機就用 bootstrap 自己的 offcanvas，不用 hover
            $('.dropdown-mega').off('mouseenter mouseleave');
        }
    }

    bindDesktopMega();
    $(window).on('resize', bindDesktopMega);

    // 手機多層選單箭頭動畫（可有可無）
    $('.asus-mobile-toggle, .asus-mobile-toggle2').on('click', function () {
        var $btn = $(this);
        setTimeout(function () {
            // aria-expanded 會由 Bootstrap 自己改
        }, 200);
    });

    $(function () {
        $(".footer-title").click(function () {
            if ($(window).width() < 768) {
                $($(this).data("target")).collapse('toggle');
            }
        });
    });

    
});

