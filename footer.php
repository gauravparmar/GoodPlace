<div id="bot-nav">
	<div id='links'>
		<span id='bookmarks'>
			<a  class='misc-link font-content' href='http://www.hust.edu.cn'>华中科技大学</a>
			<span class='misc-spliter-v'></span>
			<a class='misc-link font-content' href='http://www.tjmu.edu.cn'>同济医学院</a>
		</span>
		<span id='pages'>
			<?php
				$pages = get_pages();
				foreach($pages as $page):
			?>
				<a href="<?php echo get_page_link($page->ID) ?>" class='misc-link font-content'>
					<?php echo $page->post_title ?>
				</a>
				<span class="misc-spliter-v"></span>
			<?php endforeach; ?>
			<a class="font-content misc-link" href="<?php bloginfo("url");?>">
				Home
			</a>
		</span>
		<span class="helper-float"></span>
	</div>
	<div class='misc-spliter'></div>
	<div id='copyright'>
		Copyright © 2013. All rights reserved.
	</div>
</div>
</body>
</html>
