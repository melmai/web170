<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
?>
    <div id="wrapper">
        <main class="page">
            <section class="container">
                <div id="page-content">
                    <div class="blog-post-header">
        	            <h2 class="blog-title"><?php the_title(); ?></h2>
        	            <small class="blog-date">Published by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small>
        	        </div> <!-- .blog-post-header -->

        	        <?php the_content(); ?>
                    <?php comments_template(); ?>

                </div>


            <small>single.php</small>
            </section>
        </main>

    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
