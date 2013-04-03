<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>">
	<script type="text/javascript">
		var _bloginfo = {
			"template_url": "<?php bloginfo("template_url") ?>",
		}
	</script>
</head>
<body>
<div id="top-nav">
	<div id="top-bar" class="font-content">
		<?php the_post(); ?>
		<?php if(!__more_posts()): ?>
			<span id="top-post-info">
				<span>Category:</span>
				<span> <?php the_category(' | '); ?> </span>
				<span class="misc-spliter-v"></span>
				<span>Publish time:</span>
				<span><?php the_time('j/M/Y A'); ?></span>
				<span class="misc-spliter-v"></span>
				<span>Author:</span>
				<span><?php the_author() ?></span>
			</span>
		<?php elseif(count(get_the_category)==1): 
				$cats = get_the_category(); 
				$category = $cats[0]; 
		?>
			<span id="top-post-info">
				<span>Category:</span>
				<span><?php echo $category->name ?></span>
				<?php 
					$desc = $category->description;
					if(strlen($desc)):
				?>
					<span class="misc-spliter-v"></span>
					<span>Discription:</span>
					<span><?php echo $category->description?></span>
				<?php endif; ?>
				<span class="misc-spliter-v"></span>
				<span>Post Count:</span>
				<span><?php echo $category->count ?></span>
			</span>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		<span id="top-shortcuts">
			<a class="misc-link" href="<?php bloginfo("url");?>">
				<img src="<?php bloginfo("template_url") ?>/icons/home.png">
			</a>
		</span>
	</div>
</div>
