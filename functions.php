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

//Register Sidebar
register_sidebar(array(
	'name' => 'aside',
	'id' => 'sidebar',
));

register_sidebars(3, array(
    'before_widget' => '<div id="%1$s">',
    'after_widget' => '</div>'
));

//Add support for post thumbnails and featured imgs
add_theme_support('post-thumbnails');

//edit the excerpt
function custom_excerpt_more( $more ) {
	return '.....';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

?>
