<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div id="wrapper">
        <main class="page">
            <section class="container">
                <?php the_post_thumbnail('medium_large'); ?>
                <h1><?php the_title(); ?></h1>
                <div id="page-content">
                    <?php the_content(); ?>
                </div> <!-- #page-content -->


            <small>page.php</small>
            </section>
        </main>
        <?php get_sidebar(); ?>
    </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
