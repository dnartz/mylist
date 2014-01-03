<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : //显示文章列表 ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">


				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark"
					   title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a>
				</h2>

				<?php post_info(); ?>

				<div class="entry">
					<?php the_content('<p class="serif read-more">余下全文&raquo;</p>'); ?>
				</div>

			</div>
		<?php endwhile;
		global $wp_query;
		if (!is_search())
		{
			$current_page = $wp_query->get('paged');
			if (!$current_page)
			{
				$current_page = 1;
			}

			if ($current_page == 1)
			{
				echo
					'<span style="float: right;" class="serif paginator"><a href="' .
					get_bloginfo('url') .
					'/page/' .
					$wp_query->max_num_pages .
					'">新的文章&raquo;</a></span>';
			}
			else
			{
				echo
					'<span style="float: right;" class="serif paginator"><a href="' .
					get_bloginfo('url') .
					'/page/' .
					((int)$current_page - 1) .
					'">新的文章&raquo;</a></span>';
			}

			if ($current_page == $wp_query->max_num_pages)
			{
				echo
					'<span class="serif paginator"><a href="' .
					get_bloginfo('url') .
					'/page/1">&laquo;旧的文章</a></span>';
			}
			else
			{
				echo
					'<span class="serif paginator"><a href="' .
					get_bloginfo('url') .
					'/page/' .
					((int)$current_page + 1) .
					'">&laquo;旧的文章</a></span>';
			}
		}
		?>

	<?php else : ?>

		<h2 class="center">无</h2>
		<p class="center">什么也没有……</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
