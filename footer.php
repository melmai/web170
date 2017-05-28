<!-- ++++++++++ FOOTER ++++++++++ -->
<footer>
    <div class="footer promo">
        <div class="social">
            <p class="footer-heading">Social</p>
            <a href=""><i class="fa fa-facebook-square fa-3x"></i></a>
            <a href=""><i class="fa fa-twitter-square fa-3x"></i></a>
            <a href=""><i class="fa fa-linkedin-square fa-3x"></i></a>
            <a href=""><i class="fa fa-instagram fa-3x"></i></a>
            <a href=""><i class="fa fa-yelp fa-3x"></i></a>
        </div>
        <!-- .social -->

        <div class="email">
            <p class="footer-heading">Mailing List</p>
            <?php echo do_shortcode('[mc4wp_form id="153"]'); ?>

        </div>
        <!-- .email -->
    </div>
    <!-- .promo -->

    <div class="footer nav">
        <p class="footer-heading">Sitemap</p>

    <!-- begin dynamic footer nav -->
    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'menu_class' => 'footer nav'
        ));
    ?>
    <!-- end dynamic footer nav -->

    <!-- begin static footer nav
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    end static footer nav -->

    </div>
    <!-- .footer nav -->



    <div class="footer contact">
        <p class="footer-heading">Contact</p>
        <address>
            <p>Progressive Gym, LLC</p>
            <p>David Lyman, CPT</p>
            <p>1234 Business Address</p>
            <p><a href="mailto:david@progressivegym.com">david@progressivegym.com</a></p>
            <p>206.123.4567</p>
        </address>
    </div>
    <!-- .footer contact -->

    <div id="copyright">
        <small>&copy;Progressive Gym, LLC 2017 | All Rights Reserved | Web Design by <a href="http://mel.codes" target="_blank">Melissa Wong</small>
    </div>
</footer>

<!-- WP Footer FXN -->
<?php wp_footer(); ?>

</body>

</html>
