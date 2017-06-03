<?php

/*
Theme Name: Progressive Gym
Author: Melissa Wong
Author URI: http://mel.codes/
Description: Responsive theme using mobile-first
Version: 1.0
*/

//Register Nav Menus
register_nav_menus(array(
    'main' => __('Main Menu'),
    'footer-menu' => __('Footer Menu')
));

//Register sidebars
function progressive_widgets_init() {
    register_sidebars(3, array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
}

add_action( 'widgets_init', 'progressive_widgets_init' );


//Add support for post thumbnails and featured imgs
add_theme_support('post-thumbnails');
add_image_size('featured', 650, 300, true);

//edit the excerpt
function custom_excerpt_more( $more ) {
	return '.....';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

?>
