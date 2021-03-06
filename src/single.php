<?php
/**
 * The single post template. Used when a single post is queried. For this and all other query templates, index.php
 * is used if the query template is not present.
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
