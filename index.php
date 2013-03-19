<?php get_header(); ?>
<div class='index'>
	<div class='banner'>
		<h3>GOOD PLACE</h3>
	</div>
	<ul class='catagory'>
		<?php $cat_cnt = 0; ?>
		<?php foreach(get_the_category() as $cat): ?>
		<?php if($cat->parent !== '0') continue; ?>
		<?php if($cat_cnt++ > 4) break; ?>
		<div class='block'>
			<h3 class="title"><?php echo $cat->name; ?></h3>
			<ul class="list">
				<?php 
					global $post; 
					$o_post = $post;
					$para = array('numberposts'=>5, 'offset'=>0, 'category'=>$cat->cat_ID);
					$posts = get_posts($para);
					foreach($posts as $post): 
				?>
				<li class='article'>
					<span class='article-publisht'><?php the_time('M d'); ?></span>
					<span class='article-title'>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</span>
				</li>
				<?php 
					endforeach; 
					$post = $o_post;
				?>
			</ul>
		</div>
		<?php endforeach; ?>
	</ul>
	<div class='pic-nav'>
		<span class='left button'></span>
		<span class='right button'></span>
	</div>
</div>
<?php get_footer(); ?>