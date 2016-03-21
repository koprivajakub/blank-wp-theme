<?php if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
	return;
} ?>
<?php
if (have_comments()) :
	global $comments_by_type;
	$comments_by_type = separate_comments($comments);
	if (!empty($comments_by_type['comment'])) :
		?>

		<?php comments_number(); ?>
		<?php if (get_comment_pages_count() > 1) : ?>
		<?php paginate_comments_links(); ?>
	<?php endif; ?>
		<ul>
			<?php wp_list_comments('type=comment'); ?>
		</ul>
		<?php if (get_comment_pages_count() > 1) : ?>
		<?php paginate_comments_links(); ?>
	<?php endif; ?>
		<?php
	endif;
	if (!empty($comments_by_type['pings'])) :
		$ping_count = count($comments_by_type['pings']);
		?>
		<?php echo $ping_count._n(
			'Trackback',
			'Trackbacks',
			$ping_count,
			'blank_wp_theme'
		); ?>
		<ul>
			<?php wp_list_comments('type=pings&callback=blank_wp_theme_custom_pings'); ?>
		</ul>
		<?php
	endif;
endif;
if (comments_open()) {
	comment_form();
}
?>
