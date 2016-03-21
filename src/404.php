<?php
/**
 * Not found page template
 */
?>
<?php get_header(); ?>
<h1 class="page-title"><?php _e('Not Found', 'blank_wp_theme'); ?></h1>
<h2><?php _e('This is somewhat embarrassing, isn’t it?', 'blank_wp_theme'); ?></h2>
<p><?php _e(
		'It looks like nothing was found at this location. Maybe try a search?',
		'blank_wp_theme'
	); ?></p>
<?php get_search_form(); ?>
<?php get_footer(); ?>
