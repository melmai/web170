<!-- begin sidebar -->
<aside>   
	<?php 
	// if this is a PAGE
	if (is_page()) : ?>
    <h2>
    <?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></h2>
    <ul>
	    <?php 
		    if($post->post_parent) {
		        wp_list_pages(array(
		        	'child_of' => $post->post_parent,
		        	'title_li' => __('')
		        	)
		        );
		    } else {
		        wp_list_pages(array(
		        	'child_of' => $post->ID, 
		        	'title_li' => __('')
		        	)
		        );  
		    }
    ?>
    	
    </ul>
    <?php endif; ?>
    <?php if (!(is_page())) : // if this is a POST ?>
    <h2>Blog</h2>
    <ul>
    	<?php wp_list_categories(array(
    		'title_li' => __('')
    		)
    	);?>
  	</ul>
    <?php endif; ?>

    <small>sidebar.php</small>
</aside>
<!-- end sidebar -->