<?php get_header(); ?>
<div class="single">
<?php while(have_posts()) : the_post(); ?>
	<div class="article">
		<?php get_template_part('content', get_post_format()); ?>
	</div>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>