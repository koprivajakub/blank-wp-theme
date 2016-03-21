<?php
/**
 * The date/time template. Used when a date or time is queried. Year, month, day, hour, minute, second.
 */
?>
<?php get_header(); ?>
<?php
if (is_day()) {
	printf(__('Daily Archives: %s', 'blank_wp_theme'), get_the_time(get_option('date_format')));
} elseif (is_month()) {
	printf(__('Monthly Archives: %s', 'blank_wp_theme'), get_the_time('F Y'));
} elseif (is_year()) {
	printf(__('Yearly Archives: %s', 'blank_wp_theme'), get_the_time('Y'));
} else {
	_e('Archives', 'blank_wp_theme');
}
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part('post'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('nav', 'below'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
