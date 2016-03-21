<?php
/**
 * The search results template. Used when a search is performed.
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php if (have_posts()) : ?>
		<header class="header">
			<h1 class="entry-title"><?php printf(
					__('Search Results for: %s', 'blank_wp_theme'),
					get_search_query()
				); ?></h1>
		</header>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('post'); ?>
		<?php endwhile; ?>
		<?php get_template_part('nav', 'below'); ?>
	<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<header class="header">
				<h2 class="entry-title"><?php _e('Nothing Found', 'blank_wp_theme'); ?></h2>
			</header>
			<section class="entry-content">
				<p><?php _e('Sorry, nothing matched your search. Please try again.', 'blank_wp_theme'); ?></p>
				<?php get_search_form(); ?>
			</section>
		</article>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
