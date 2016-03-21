<?php
/**
 * The author template. Used when an author is queried.
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php _e('Author Archives', 'blank_wp_theme'); ?>: <?php the_author_link(); ?>
<?php if ('' != get_the_author_meta('user_description')) {
	echo apply_filters(
		'archive_meta',
		get_the_author_meta('user_description')
	);
} ?>
<?php rewind_posts(); ?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('post'); ?>
<?php endwhile; ?>
<?php get_template_part('nav', 'below'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
