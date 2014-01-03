<?php
function posts_table($arcresults, $title = '所有文章')
{
	global $wp_locale;

	?><h2><b><?= $title ?></b></h2>
	<table id="arc"><?php
	if ($arcresults)
	{
		$last_year  = 0;
		$last_month = 0;
		foreach ($arcresults as $arcresult)
		{
			$year  = $arcresult->year;
			$month = $arcresult->month;
			if ($year != $last_year)
			{
				$last_year  = $year;
				$last_month = 0;
				?>
				<tr class=year>
					<th>
						<br/><?php echo $arcresult->year; ?>
					</th>
				</tr>
			<?php
			}
			if ($month != $last_month)
			{
				$last_month = $month;
				?>
				<tr class=archive>
					<th><?php echo $wp_locale->get_month($arcresult->month); ?></th>
					<td></td>
				</tr>
			<?php
			}
			?>
			<tr class=archive>
				<th><?php echo $arcresult->dayofmonth; ?></th>
				<td id=p <?php echo $arcresult->ID; ?>><a
						href="<?php bloginfo('url');
						echo
							'/' .
							$arcresult->ID .
							'/' .
							$arcresult->post_name; ?>"><?php echo strip_tags(apply_filters('the_title',
				                                                                           $arcresult->post_title)); ?></a>
				</td>
			</tr>
		<?php
		}
		echo '</table>';
	}
	else
	{
		echo '<h3>无</h3>';
	}
}

?>