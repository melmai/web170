<!doctype html>
<html>

<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/a8b458af26.js"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Comfortaa|Raleway" rel="stylesheet">

    <!-- SITE STYLES -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- SITE JS/JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

    <!-- WP Head Fxn -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <div id="mobile-menu">
            <button href="">
                <img src="<?php bloginfo('template_directory'); ?>/images/open.svg" id="open" />
                <img src="<?php bloginfo('template_directory'); ?>/images/close.svg" id="close" />
            </button>
        </div><!-- #mobile-menu -->

        <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/images/pg-logo.svg" alt="Progressive Gym Logo" id="logo"/>
        </a>

        <!-- begin dynamic nav -->
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => 'nav',
                'menu_id' => 'main-nav',
                'items-wrap' => '<ul id="main-nav" class="%2$s">%3$s</ul>'
            ));
        ?>
        <!-- end dynamic nav -->

        <!-- begin static nav
        <nav>
        <ul id="main-nav">
            <li><a href="index.html">Home</a></li>
            <li class="expand"><a href="services.html">Services</a></li>
                <ul id="sub-menu">
                    <li><a href="">Personal Training</a></li>
                    <li><a href="">Group Training</a></li>
                    <li><a href="">Business Policies</a></li>
                </ul>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        </nav>
        end static nav -->

        <div class="social">
            <a href=""><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href=""><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href=""><i class="fa fa-linkedin-square fa-2x"></i></a>
            <a href=""><i class="fa fa-instagram fa-2x"></i></a>
            <a href=""><i class="fa fa-yelp fa-2x"></i></a>
        </div>

    </header>

    <!-- ++++++++++ END HEADER ++++++++++ -->
