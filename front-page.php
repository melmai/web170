<?php get_header(); ?>

<main id="front-page">
        <!--
        <section class="container">
            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <img class="mySlides" src="images/slide1.svg">
            <img class="mySlides" src="img_lights.jpg">
            <img class="mySlides" src="img_mountains.jpg">
            <img class="mySlides" src="img_forest.jpg">
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
        </section>
    -->

        <section class="container">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php the_content(''); ?>
            <?php endwhile; endif; ?>
        </section>

        <section class="container" id="container-3">
            <h2 class="home-title">How To Get Started</h2>
            <section>
                <div class="icon-box">
                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                </div> <!-- .icon-box -->
                <div class="content">
                    <h3 class="icon-box-labels">Step 1: Location</h3>
                    <p>With Progressive Gym, the world is your gym! We can train you at your home, your business, or in public spaces. We will bring the gym to you!</p>
                    <a href="locations.html" class="button">See Locations</a>
                </div><!-- .content -->

            </section>

        <section>
            <div class="icon-box">
                <i class="fa fa-users fa-3x" aria-hidden="true"></i>
            </div> <!-- .icon-box -->
            <div class="content">
                <h3 class="icon-box-labels">Step 2: Select Style</h3>
                <p>Whether you're looking for one-on-one sessions or corporate events, we accomodate groups of all sizes. We provide training on fundamental office ergonomics and pilates to bootcamp classes if that's what you prefer!</p>
                <a href="services.html" class="button">See Styles</a>
            </div><!-- .content -->
        </section>

        <section>
            <div class="icon-box">
                <i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
            </div><!-- .icon-box -->
            <div class="content">
                <h3 class="icon-box-labels">Step 3: Schedule</h3>
                <p>Contact us to get your first session started! We travel within the greater Seattle area to fit your needs.</p>
                <a href="contact.html" class="button">Contact</a>
            </div><!-- .content -->
        </section>
    </section>

    <section id="blog-feed"class="container">
        <h2 class="home-title">Latest Blog Posts</h2>
        <ul>
            <?php rewind_posts(); ?>
            <?php query_posts('showposts=3'); // ?>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" class="blog-title"><?php the_time('d M Y');?> || <?php the_title(); ?></a><?php the_excerpt(); ?>
                </li>
            <?php endwhile; // end loop two ?>
        </ul>
    </section>
</main>

<?php get_footer(); ?>
