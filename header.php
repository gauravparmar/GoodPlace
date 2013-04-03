<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		var _bloginfo = {
			"template_url": "<?php bloginfo("template_url") ?>",
		}
	</script>
</head>
<body>
<div id="top-nav">
	<div id="top-bar" class="font-content">
		<span id="top-post-info">
		<?php the_post(); ?>
		<?php if(is_home()): ?>
			<span><?php echo date("jS M Y l | H:i T") ?></span>

		<?php elseif(is_single()): ?>
			<span>Category:</span>
			<span> <?php the_category(' | '); ?> </span>
			<span class="misc-spliter-v"></span>
			<span>Publish time:</span>
			<span><?php the_time('j/M/Y A'); ?></span>
			<span class="misc-spliter-v"></span>
			<span>Author:</span>
			<span><?php the_author() ?></span>

		<?php elseif(is_category()): 
				$cats = get_the_category(); 
				$category = $cats[0]; 
		?>
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
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</span>
		<span id="top-shortcuts">
			<a class="misc-link" href="<?php bloginfo("url");?>">
				<img src="<?php bloginfo("template_url") ?>/icons/home.png">
			</a>
		</span>
	</div>
</div>
