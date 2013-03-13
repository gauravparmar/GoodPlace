<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage GoodPlace
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<?php if(have_posts()): ?>
	<div class='archive'>
		<?php
			while(have_posts()): the_post();
			get_template_part('content', get_post_format());
			endwhile;
		?>
	</div>
	<?php endwhile;?>
	<?php else: ?>
	<?php endif; ?>
<?php get_footer(); ?>