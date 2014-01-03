<?php
/**
 *  Generate time and tag header for single post.
 */
function post_info()
{
	?>
	<p class="post-date">
		<?php
		echo date('M', get_the_time('U'));
		the_time(__(' jS, Y G:i'));
		?>
		<br>
		<?php $tags = get_the_tags();
		if ($tags): ?>
			<span class="tags-list">标签：
				<?php
				foreach (array_keys($tags) as $key)
				{
					$eres[] =
						'<a href="' .
						get_tag_link($tags[$key]->term_id) .
						'">' .
						$tags[$key]->name .
						'</a>';
				}
				echo implode(', ', $eres);
				?>
			</span>
		<?php endif; ?>
	</p>
<?php } ?>