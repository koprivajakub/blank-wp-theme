<?php
/**
 * The category template. Used when a category is queried.
 */
?>
<?php get_header(); ?>
<?php _e('Category Archives: ', 'blank_wp_theme'); ?><?php single_cat_title(); ?>
<?php if ('' != category_description()) {
	echo apply_filters('archive_meta', category_description());
} ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part('post'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('nav', 'below'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
