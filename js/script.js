$(function() {
    var $nav = $('#main-nav');
    var $subMenu = $('.sub-menu');
    var $itemExpand = $('#menu-item-38');

    //hide navigation menus
    $('#close').hide();
    $subMenu.hide();

    //when #mobile-nav clicked...
    $('#mobile-menu').on('click', function() {
        //change icon
        $('#open').toggle();
        $('#close').toggle();

        //toggle nav menu
        $nav.slideToggle();
        return false;
    });

    if (window.innerWidth < 640) {
         //when #menu-item-38 clicked...
        $itemExpand.on('click', function() {
            //toggle #sub-menu
            $subMenu.slideToggle();
            return false;
        })
    }



    if (window.innerWidth > 640) {
        $itemExpand.on('mouseenter', function() {
            $subMenu.slideDown();
            return false;
        });
        $itemExpand.on('mouseleave', function(){
            $subMenu.slideUp('slow');
            return false;
        });
        $nav.show();
    };
});
