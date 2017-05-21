<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <main class="page">
        <section class="container">
        	<?php the_post_thumbnail('medium_large'); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

        <small>page.php</small>
        </section>
    </main>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
