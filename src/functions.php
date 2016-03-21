<?php
require_once 'template-functions.php';
$locale = THEME_LOCALE;

add_action('after_setup_theme', 'blank_wp_theme_setup');
function blank_wp_theme_setup() {
	load_theme_textdomain('blank_wp_theme', get_template_directory().'/languages');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 640;
	}
	register_nav_menus(
		['main-menu' => __('Main Menu', 'blank_wp_theme')]
	);
}

add_action('init', 'blank_wp_theme_dequeue_emoticons');
function blank_wp_theme_dequeue_emoticons() {
	if (USE_EMOTICONS) {
		// disable Wordpress jQuery we should use own version
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
	}
}

add_action('comment_form_before', 'blank_wp_theme_enqueue_comment_reply_script');
function blank_wp_theme_enqueue_comment_reply_script() {
	if (get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_filter('the_title', 'blank_wp_theme_title');
function blank_wp_theme_title($title) {
	if ($title == '') {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter('wp_title', 'blank_wp_theme_filter_wp_title');
function blank_wp_theme_filter_wp_title($title) {
	return $title.esc_attr(get_bloginfo('name'));
}

function blank_wp_theme_custom_pings($comment) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?></li>
	<?php
}

add_filter('get_comments_number', 'blank_wp_theme_comments_number');
function blank_wp_theme_comments_number($count) {
	if (!is_admin()) {
		global $id;
		$comments = get_comments('status=approve&post_id='.$id);
		$comments_by_type = separate_comments($comments);

		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}
