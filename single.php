<?php get_header(); ?>

<div id="content">
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2>
			<b><?php the_title(); ?></b>
		</h2>

		<?php post_info(); ?>

		<div class="entry">
			<?php if (have_posts()) : while (have_posts()) :
			the_post(); ?>
			<?php the_content('<p class="serif read-more">余下全文&raquo;</p>'); ?>
			<?php wp_link_pages(array('before'         => '<p><strong>Pages:</strong> ',
			                          'after'          => '</p>',
			                          'next_or_number' => 'number')); ?>
			<p>
				<small></small>
			</p>
		</div>
	</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php
	endif;
	?>
	<small><?php edit_post_link('编辑文章', '<p>', '</p>'); ?></small>

</div>

<?php get_footer(); ?>
