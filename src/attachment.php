<?php
/**
 * Attachment template. Used when viewing a single attachment.
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
		<a href="<?php echo wp_get_attachment_url($post->ID); ?>"
		   title="<?php echo esc_html(get_the_title($post->ID)); ?>"
		   rel="attachment">
			<?php echo basename($post->guid); ?>
		</a>
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
