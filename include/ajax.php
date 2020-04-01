<?php 

function LoadMorePosts(){
	
	$offset = $_POST['offset'];

	$posts = [
		'post_type' => 'post',
		'offset' => $offset
	];

	$wp_query = new WP_Query( $posts );

	if($wp_query->have_posts()){
		while($wp_query->have_posts()){
			
			$wp_query->the_post();
			
			get_template_part('template_parts/post');
		}
		
		wp_reset_postdata();
	}

	exit;
}


add_action('wp_ajax_LoadMorePosts', 'LoadMorePosts');
add_action('wp_ajax_nopriv_LoadMorePosts', 'LoadMorePosts');