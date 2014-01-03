<?php
/**
 * @package WordPress
 * @subpackage mylist
 */
/*
Template Name: allposts
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<form action="<?php bloginfo('url'); ?>/" method="get">

					<p>

					<h2>
						<b>搜索：</b>
						<input placeholder="输入完成后按回车键直接进行搜索" id="search"
						       name="s"
						       type="text"> 

					</h2>

					</p>

				</form>


				<h2><b>分类</b></h2>
				<?php
				$category = get_all_category_ids();
				foreach ($category as $current)
				{
					$cat[] = '<a href="
				' . get_category_link($current) . '">
						 ' . get_cat_name($current) . '
					</a>';
				}
				echo implode(':', $cat);
				?>
				<br>

				<?php
				$query =
					"SELECT YEAR(post_date) AS `year`, MONTH(post_date) as `month`, DAYOFMONTH(post_date) as `dayofmonth`, ID, post_name, post_title FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC";
				$key = md5($query);
				$cache = wp_cache_get('mp_archives', 'general');
				if (!isset($cache[$key]))
				{
					$arcresults  = $wpdb->get_results($query);
					$cache[$key] = $arcresults;
					wp_cache_add('mp_archives', $cache, 'general');
				}
				else
				{
					$arcresults = $cache[$key];
				}

				require 'posts_table.php';

				posts_table($arcresults);

				?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>