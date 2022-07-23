<?php

function custom_theme_assets()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('style-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

	wp_enqueue_script('script-jquery', get_theme_file_uri('assets/js/jquery-3.6.0.min.js'));
	wp_enqueue_script('script-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], true);
	wp_enqueue_script('script', get_theme_file_uri('script.js'), [], true);
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function register_my_menus()
{
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'register_my_menus');

function gt_get_post_view()
{
	$count = get_post_meta(get_the_ID(), 'post_views_count', true);
	return "$count views";
}

function gt_set_post_view()
{
	$key = 'post_views_count';
	$post_id = get_the_ID();
	$count = (int) get_post_meta($post_id, $key, true);
	$count++;
	update_post_meta($post_id, $key, $count);
}

function gt_posts_column_views($columns)
{
	$columns['post_views'] = 'Views';
	return $columns;
}

function gt_posts_custom_column_views($column)
{
	if ($column === 'post_views') {
		echo gt_get_post_view();
	}
}

add_filter('manage_posts_columns', 'gt_posts_column_views');
add_action('manage_posts_custom_column', 'gt_posts_custom_column_views');


/* AJAX requests */
add_action('wp_ajax_newsletter', 'newsletter_callback');
add_action('wp_ajax_nopriv_newsletter', 'newsletter_callback');

function newsletter_callback()
{
	global $wpdb;

	$email = $_POST['email'] ?? '';

	if (filter_var($email, FILTER_VALIDATE_EMAIL))
		echo json_encode([
			'success' => 'Thank you for subscribing!'
		]);
	else
		echo json_encode([
			'error' => 'Sorry, please enter a valid email address.'
		]);

	wp_die();
}

add_action('wp_ajax_load_posts', 'load_posts_callback');
add_action('wp_ajax_nopriv_load_posts', 'load_posts_callback');

function load_posts_callback()
{
	$category = $_GET['category'] ?? '';

	if ($category)
		include('parts/categorized-posts.php');
	die;
}
