<div id="footer">
	<div id="bottom-menu">
		<div id="bottom-menu-img">
		</div>
		<div id="bottom-menu-content">
			<a title="无版权声明" href="<?php bloginfo('url');
			?>/206/%E6%97%A0%E7%89%88%E6%9D%83">无版权</a> : :
			<a title="极简主义" href="<?php bloginfo('url'); ?>/less/">简</a> : :
			<a title="RSS订阅源" href="<?php bloginfo('url'); ?>/feed">订</a> : :
			<a title="所有文章" href="<?php bloginfo('url'); ?>/allposts">文</a> : :
			<a title="关于我" href="<?php bloginfo('url'); ?>/about">我</a>
			<?php if (is_single() or is_page('allposts'))
			{
				?>
				: :<a title="回到主页" href="<?php bloginfo('url'); ?>">主页</a>
				<script>MNMLIST.bottom_menu_width = 268;</script>
			<?php }else{ ?>
				<script>MNMLIST.bottom_menu_width = 220;</script>
			<?php } ?>        </div>
	</div>
</div>
</div>

<?php wp_footer(); ?>

<script src="<?php bloginfo('url'); ?>/wp-content/themes/mnmlist3/js/jquery-2
.0.3.min
.js"></script>
<script src="<?php bloginfo('url');
?>/wp-content/themes/mnmlist3/js/mnmlist.js"></script></body>
</html>
