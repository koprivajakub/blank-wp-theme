<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
	<?php wp_head(); ?>
	<?php
	\CustomTemplate\Template\TemplateLoader::loadCustomTemplate('html-header');
	?>
</head>
<body <?php body_class(); ?>>
<?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
				echo '<h1>';
			} ?><a href="<?php echo esc_url(home_url('/')); ?>"
		           title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(
					get_bloginfo('name')
				); ?></a><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
				echo '</h1>';
			} ?>
<?php bloginfo('description'); ?>
<?php get_search_form(); ?>
<?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
