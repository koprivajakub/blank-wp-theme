<?php
/**
 * The single post template used when a single post from a custom post type is queried. For example, single-book.php
 * would be used for displaying single posts from the custom post type named "book". index.php
 * is used if the query template for the custom post type is not present.
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('post'); ?>
		<?php if (!post_password_required()) {
			comments_template('', true);
		} ?>
	<?php endwhile; endif; ?>
	<footer class="footer">
		<?php get_template_part('nav', 'below-single'); ?>
	</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
