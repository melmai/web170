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

// Get image attachments and display as flexslider
function get_flexslider_gallery() {
    global $post;
    $attachments = get_children(array(
        'post_parent' => $post->ID, //get children of current page being accessed
        'post_type' => 'attachment', //get attachments for current page
        'post_mime_type' => 'image', //get attachments with type = image
        'order' => 'ASC', //ascending order
        'orderby' => 'menu_order', //order by menu order, how it is placed in editor

    ));
    if ($attachments) {
        echo '<div class="flexslider"><ul class="slides">';
        foreach ($attachments as $attachment) {
            echo '<li id="slide-' . $attachment->ID . '">';
            echo wp_get_attachment_image($attachment->ID, 'large');
            echo '</li>';
        }
        echo '</ul></div>';
    }
}

// SEO Title Tag
function get_my_title_tag() {
    global $post;

    // If on page or single post...
    if (is_page() || is_single()) {
        the_title();
    // Otherwise...
    } else {
        bloginfo('description');
    }

    if ($post -> post_parent) {
        echo ' | ';
        echo get_the_title($post -> post_parent);
    }

    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Seattle, WA.';
}

//Add support for page excerpts
add_post_type_support('page', 'excerpt');

?>
