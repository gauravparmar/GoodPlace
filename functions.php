<?php
	add_theme_support('post-thumbnails');
	//query_posts( 'posts_per_page=5' );
	function __more_posts() {
		global $wp_query;
		return $wp_query->current_post + 1 < $wp_query->post_count;
	}
	function __count_posts() {
		global $wp_query;
		return $wp_query->post_count;
	}
?>
