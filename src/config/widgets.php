<?php

add_action('widgets_init', 'blank_wp_theme_widgets_init');
function blank_wp_theme_widgets_init() {
	register_sidebar(
		[
			'name'          => __('Sidebar Widget Area', 'blank_wp_theme'),
			'id'            => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);
}
