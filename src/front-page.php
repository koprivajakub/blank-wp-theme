<?php
/**
 * The front page template.
 */
?>
<?php get_header(); ?>
	!!! UNCOMMENT WHAT YOU LIKE IN <?php echo __FILE__ ?> !!!
	<?php
	// TODO: Uncomment this to itereate over posts
/*
    if (have_posts()) : while (have_posts()) : the_post(); ?>
	   <?php get_template_part('post'); ?>
	   <?php comments_template(); ?>
   <?php endwhile; endif; ?>
   <?php get_template_part('nav', 'below'); ?>
*/
	?>
	<?php
	// TODO: Insert own content
	?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
