<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>">
	<script type="text/javascript" src="<?php blockinfo("template_url")?>/scripts/home.js"></script>
</head>
<body>
<div id="top-nav">
	<div id="top-bar" class="font-content">
		<?php if(have_posts()): ?>
		<span id="top-post-info">
			<span>Category:</span>
			<span> <?php the_category(' '); ?> </span>
			<span class="misc-spliter-v"></span>
			<span>Publish time:</span>
			<span><?php the_time('j/M/Y A'); ?></span>
			<span class="misc-spliter-v"></span>
		</span>
		<?php endif; ?>
		<span id="top-shortcuts">
			<a class="misc-link" href="<?php bloginfo("url");?>">
				<img src="<?php bloginfo("template_url") ?>/icons/home.png">
			</a>
		</span>
	</div>
</div>
