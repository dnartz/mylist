<?php
// Load function post_info()
require 'post_info.php';
?>
<!DOCTYPE HTML>
<html lang=zh-CN>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type"
	      content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

	<title><?php if (is_single())
		{
			wp_title(); ?> | <?php bloginfo('name');
		}
		else
		{
			bloginfo('name');?> |
			<?php if (is_category()): ?>
			分类:<?php echo get_cat_name(get_query_var('cat'));
		elseif (is_404()):echo '404';
		elseif (is_tag()):echo '标签：' . single_tag_title('', FALSE);
		elseif (is_search()):the_search_query();
		else:
			bloginfo('description');
		endif;
		} ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
	      type="text/css" media="screen, print"/>
	<link rel="alternate" type="application/rss+xml"
	      title="<?php bloginfo('name'); ?> RSS Feed"
	      href="<?php bloginfo('rss2_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<script>MNMLIST = {};</script>

	<?php wp_head(); ?>
</head>
<body>

<div id="container">