<?php echo sprintf(
	__('%1$s %2$s %3$s. All Rights Reserved.', 'blank_wp_theme'),
	'&copy;',
	date('Y'),
	esc_html(get_bloginfo('name'))
);
echo sprintf(__('Theme By: %1$s', 'blank_wp_theme'), '<a href="'.get_home_url().'">Lonely Vertex s.r.o.</a>'); ?>

<?php wp_footer(); ?>
<?php
\CustomTemplate\Template\TemplateLoader::loadCustomTemplate('html-scripts')
?>
</body>
</html>
