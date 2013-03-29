<?php get_header() ?>
<div id='home-wrapper'>
	<div id='banner'>
		<h3 class="font-headline">GOOD PLACE</h3>
	</div>
	<ul id='categories'>
		<?php 
			global $category;
			$cats = get_categories(array(
				'show_option_all'    => '',
				'orderby'            => 'ID',
				'order'              => 'ASC',
				'style'              => 'list',
				'show_count'         => 1,
				'hide_empty'         => 1,
				'use_desc_for_title' => 1,
				'child_of'           => 0,
				'feed'               => '',
				'feed_type'          => '',
				'feed_image'         => '',
				'exclude'            => '',
				'exclude_tree'       => '',
				'include'            => '',
				'hierarchical'       => 1,
				'title_li'           => __( 'Categories' ),
				'show_option_none'   => __('No categories'),
				'number'             => null,
				'echo'               => 1,
				'depth'              => 1,
				'current_category'   => 0,
				'pad_counts'         => 0,
				'taxonomy'           => 'category',
				'walker'             => null
			));
			foreach($cats as $category)
				get_template_part("home", "category");
		?>
	</ul>
</div>
<?php get_footer() ?>
