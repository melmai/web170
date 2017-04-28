<!doctype html>
<html>

<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/a8b458af26.js"></script>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Raleway" rel="stylesheet">
    <!-- SITE STYLES -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- WP Head Fxn -->
    <?php wp_head(); ?>
    <!-- End WP Head Fxn -->
</head>

<body <?php body_class(); ?>

    <header>

        <div id="logo">
            <h1>Progressive Gym</h1>
        </div>
        <!-- #logo -->

        <nav class="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="train.html">Train</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <div class="social">
            <ul>
                <li><a href="https://www.yelp.com/biz/progressive-gym-seattle" target="_blank"><i class="fa fa-yelp fa-3x"></i></a></li>
                <li><a href="https://www.linkedin.com/in/david-lyman-57a749/" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                <li><a href="https://www.facebook.com/ProgressiveGym/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a></li>
            </ul>
        </div>
        <!-- #social -->

    </header>

    <!-- ++++++++++ END HEADER ++++++++++ -->

    <div id="intro">
        <div class="banner">
            <h2>Progressive Gym</h2>
            <p class="cursive">your mobile personal trainer</p>
        </div>
        <!--  .banner -->
    </div>
    <!-- #intro -->

    <div class="special">
        <h2>Introductory Offer</h2>
        <p class="promo">50% Off First Session!</p>
        <a href="contact.php" class="button" id="standard-size">Get Started</a>
    </div>
    <!-- .special -->

    <div class="special">
        <h2>Why mobile personal training?</h2>
        <p>Nam quis sodales nisl, id rutrum risus. Proin dolor turpis, viverra quis ipsum nec, lacinia venenatis mi. Nam egestas ultrices mi. Maecenas quis interdum purus. Nunc convallis non lorem vitae consectetur. Proin id orci vestibulum, ullamcorper
            est eu, maximus ligula. Cras dapibus sapien vel arcu pharetra, eget ornare ligula convallis. Pellentesque molestie dapibus ultricies. Vestibulum fringilla sem lacus.</p>
    </div>
    <!-- .special -->

    <div class="special">
        <h2>How to get started</h2>
        <section>
            <div class="icon-box">
            <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
        </div>
            <h3>Step 1: Location</h3>

            <p>With Progressive Gym, the world is your gym! We can train you at your home, your business, or in public spaces. We will bring the gym to you!</p>
            <a href="" class="button">See Locations</a>
        </section>
        <section>
            <div class="icon-box">
            <i class="fa fa-users" aria-hidden="true"></i>
        </div>
            <h3>Step 2: Select Style</h3>

            <p>Whether you're looking for one-on-one sessions or corporate events, we accomodate groups of all sizes. We provide training on fundamental office ergonomics and pilates to bootcamp classes if that's what you prefer!</p>
            <a href="" class="button">See Styles</a>
        </section>
        <section>
            <div class="icon-box">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </div>
            <h3>Step 3: Schedule</h3>

            <p>Contact us to get your first session started! We travel within the greater Seattle area to fit your needs.</p>
            <a href="" class="button">Contact</a>
        </section>
    </div>

    <!-- ++++++++++ FOOTER ++++++++++ -->
    <footer>
        <div id="footerLeft" class="nav">
            <h4>Sitemap</h4>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="train.html">Train</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!-- #footerLeft -->

        <div id="footerMid">
            <div class="social">
                <h4>Social</h4>
                <a href=""><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href=""><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href=""><i class="fa fa-linkedin-square fa-2x"></i></a>
                <a href=""><i class="fa fa-instagram fa-2x"></i></a>
                <a href=""><i class="fa fa-yelp fa-2x"></i></a>
            </div>
            <!-- #social -->

            <div class="email">
                <form>
                    <h4>Mailing List</h4>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email Address">
                    <input type="submit">
                </form>
            </div>
            <!-- .email -->
        </div>
        <!-- #footerMid -->

        <div id="footerRight">
            <h4>Contact</h4>
            <p>Progressive Gym, LLC</p>
            <p>David Lyman, CPT</p>
            <p>1234 Business Address</p>
            <p><a href="mailto:david@progressivegym.com">david@progressivegym.com</a></p>
            <p>206.123.4567</p>
        </div>
        <!-- #footerRight -->
    </footer>

    <!-- WP Footer FXN -->
    <?php wp_footer(); ?>
    <!-- End WP Footer FXN -->
</body>

</html>
