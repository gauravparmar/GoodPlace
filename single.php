<?php get_header(); ?>
<div id="single-wrapper">
	<?php 
		if(have_posts()) {
			the_post();
			get_template_part('content');
			rewind_posts();
		} 
		else
			get_template_part('404');
	?>
</div>
<?php get_footer(); ?>

