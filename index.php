<?php get_header(); ?>
<div id="wrapper">
	<main class="page">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<section class="container">
		        <h2 class="blog-feed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<small class="blog-date">Published by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small>
				<div class="flexbox">
					<div class="flex-element">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					</div>
					<div class="flex-element margin-left">
						<?php the_excerpt(); ?>
						 <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
					</div>
				</div>


		    </section>
	    <?php endwhile; endif; ?>

	        <small>index.php</small>
	    </main>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
