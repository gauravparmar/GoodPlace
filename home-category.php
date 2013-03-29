<?php global $category; ?>
<li class='category'>
	<h5 class="font-title">
		<?php echo $category->name; ?>
	</h5>
	<ul class="contents">
		<?php 
			global $post;
			$posts = get_posts(array(
				'posts_per_page' 	=> 15,
				'numberposts'		=> 15,
				'offset'			=> 0,
				'category'			=> $category->cat_ID
			));
			foreach($posts as $post):
		?>
		<li class="item">
			<span class='date font-content'>
				<?php the_time('j/n'); ?>
			</span>
			<span class='title font-content misc-link'>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</span>
			<span class='comments font-content misc-link'>
				<a href="<?php comments_link() ?>">(<?php echo $post->comment_count; ?>)</a>
			</span>
		</li>
		<?php endforeach; ?>
	</ul>
</li>
