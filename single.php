<?php get_header(); ?>
<div id="single-wrapper">
	<?php 
		if(have_posts()) {
			the_post();
			get_template_part('single', 'article');
			rewind_posts();
		} 
		else
			get_template_part('404');
	?>
<div id='nav-link' class='font-content'>
	<?php previous_post_link("<span class='misc-link'>%link</span> << "); ?>
	<span class='misc-spliter-v'></span>
	<?php next_post_link(">> <span class='misc-link'>%link</span>"); ?>
</div>
</div>
<?php get_footer(); ?>

