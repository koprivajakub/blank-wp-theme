<?php
/**
 * Image attachment template. Used when viewing a single image attachment. If not present, attachment.php will be used.
 */
?>
<?php get_header(); ?>
<?php global $post; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_title(); ?>
	<a href="<?php echo get_permalink($post->post_parent); ?>" title="<?php printf(
		__('Return to %s', 'blank_wp_theme'),
		esc_html(get_the_title($post->post_parent))
	); ?>" rev="attachment">
		<?php echo get_the_title(
			$post->post_parent
		); ?></a>
	<?php edit_post_link(); ?>
	<?php get_template_part('post', 'meta'); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php previous_image_link(false, '&larr;'); ?>
		<?php next_image_link(false, '&rarr;'); ?>
		<? $att_image = wp_get_attachment_image_src(
			$post->ID,
			"large"
		); ?>
		<a href="<?php echo wp_get_attachment_url($post->ID); ?>"
		   title="<?php the_title(); ?>" rel="attachment"><img
				src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>"
				height="<?php echo $att_image[2]; ?>" class="attachment-medium"
				alt="<?php $post->post_excerpt; ?>"/></a>
		<?php if (!empty($post->post_excerpt)) {
			the_excerpt();
		} ?>
		<?php if (has_post_thumbnail()) {
			the_post_thumbnail();
		} ?>
	</article>
	<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
