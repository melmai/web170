$(function() {
    var $nav = $('#main-nav');
    var $subMenu = $('#sub-menu');

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

    //when .expand clicked...
    $('.expand').on('click', function() {
        //toggle #sub-menu
        $subMenu.slideToggle();
        return false;
    });

    if (window.innerWidth > 640) {
        $('.expand').on('mouseenter', function() {
            $subMenu.slideDown();
            return false;
        })
        $nav.on('mouseleave', function(){
            $subMenu.slideUp();
        })
    }

    var slideIndex = 0;
    carousel();

    function carousel() {
        var $slidesList = $('.mySlides');
        for (var i = 0; i < slidesList.length; i++) {
          x[i].style.display = 'none';
        }
        slideIndex++;
        if (slideIndex > slidesList.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = 'block';
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
});
