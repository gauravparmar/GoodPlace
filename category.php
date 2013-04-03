<?php get_header() ?>
<div id='category-wrapper'>
	<ul id='categories'>
		<li><h4 class='font-title'>All Categories</h4></li>
		<?php 
			$category = get_the_category();
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
			foreach($cats as $cat):
		?>
		<li class='misc-spliter'></li>
		<li class='category'>
			<h6 class="font-title">
				<a href="<?php echo get_category_link($cat->cat_ID) ?>">
					<?php echo $cat->name ?>
				</a>
			</h6>
		</li>
		<?php endforeach; ?>
	</ul>
	<ul id="posts">
	<?php while(have_posts()): the_post();?>
		<li class='post'>
			<table>
				<tbody>
				<?php if(has_post_thumbnail(get_the_ID())): ?>
				<tr>
					
					<td rowspan="3">
						<a href="<?php the_permalink(); ?>" class='post-thumbnail'>
							<?php the_post_thumbnail(array(72, 72)) ?>
						</a>
					</td>
					<td></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td>
						<span class='post-name font-content'>
							<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
						</span>
						<span class='post-date font-content'><?php the_time('j/M') ?></span>
					</td>
				</tr>
				<tr><td>
					<span class='post-cats font-content'><?php the_category(',') ?></span>
				</td></tr>
				</tbody>
			</table>
		</li>
	<?php endwhile; ?>
	<li id='nav-link' class='font-content'>
		<?php posts_nav_link('|', 'Privious Page', 'Next Page') ?>
	</li>
	</ul>
	<div class='helper-float'></div>
</div>
<?php get_footer() ?>
