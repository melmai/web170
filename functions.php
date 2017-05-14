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

?>
