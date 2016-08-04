<?php
function load_more_posts() {
	$nonce_check = check_ajax_referer( 'extra-special', 'security' );
	
	if ( $nonce_check ){ 

		$offset = $_POST['offset'];
	
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => '10',
			'orderby'	 => 'date',
			'order'	 	 => 'DESC',
			'offset'	 => $offset,
		);

		$loop = new WP_Query($args);

		if ( $loop->have_posts() ){
		
			while( $loop->have_posts() ){
				$loop->the_post();

				?>
				<article>

					<a href="<?php echo get_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
					
					<?php the_excerpt(); ?>

				</article>
				<?php

			}
			wp_reset_postdata();
		}
		wp_die();
	}
	else {
		exit();
	}
}
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );
