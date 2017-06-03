<!-- begin sidebar -->
<aside>
	<div id="sub-navigation">
		<?php
		// if this is a PAGE
		if (is_page()) : ?>
	    <h3><?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></h3>
	    <ul>
		    <?php
			    if($post->post_parent) {
			        wp_list_pages(array(
			        	'child_of' => $post->post_parent,
			        	'title_li' => __('')
			        	)
			        );
			    } else if (is_page([34,23])){
					echo '
					<div id="contact-aside">
					<address>
						<p>Progressive Gym, LLC</p>
						<p>c/o David Lyman, CPT</p>
						<p>763 Boylston Ave E</p>
						<p>Seattle, WA 98102</p>
						<p><a href="mailto:david@progressivegym.com">david@progressivegym.com</a></p>
						<p>425.654.1364</p>
					</address>
					</div>
					';
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
	   <?php dynamic_sidebar(2); ?>

	    <?php endif; ?>

	</div> <!-- #sub-navigation -->

	<div id="quotes">
		<?php if(get_post_meta($post->ID, 'quote', true)) : ?>
			<h3>Quote</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'quote', true); ?>
			</blockquote>
		<?php endif; ?>
	</div> <!-- #quotes -->

	<!-- Start Widgets -->
	<?php dynamic_sidebar(1); ?>
	<!-- End Widgets -->


    <small>sidebar.php</small>
</aside>
<!-- end sidebar -->
