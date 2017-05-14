<?php get_header(); ?>

<main class="page">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="container">
	        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	        <?php the_content(); ?>
	    </section>
    <?php endwhile; endif; ?>

        <small>index.php</small>
    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
