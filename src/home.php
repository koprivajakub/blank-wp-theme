<?php
/**
 * The home page template, which is the front page by default. If you use a static front page in admin menu
 * this is the template for the page with the latest posts.
*/
?>
<?php get_header(); ?>
<section id="content" role="main">
	<h1 style="color: red">UNCOMMENT WHAT YOU LIKE IN <?php echo __FILE__ ?></h1>
	<?php
	// TODO: Uncomment this to itereate over posts

	if (have_posts()) : while (have_posts()) : the_post(); ?>
	   <?php get_template_part('post'); ?>
	   <?php comments_template(); ?>
   <?php endwhile; endif; ?>
   <?php get_template_part('nav', 'below'); ?>

	?>
	<?php
	// TODO: Insert own content
	?>
</section>
<?php
	// TODO: Display sidebar
/*
	get_sidebar();
*/
?>
<?php get_footer(); ?>
