<?php get_header(); ?>
<div class="single">
<?php if(have_posts()) : the_post(); ?>
	<div class="article">
		<h2 class='article-title'><?php the_title(); ?></h2>
		<?php the_content() ?>
		<div class='float-fix'></div>
	</div>
<?php else: ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>