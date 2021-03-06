<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

if (!class_exists('Timber')){
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
if (is_front_page()){
	$context['home_1'] = Timber::get_widgets('home_1');
	$context['sb-spot-1'] = Timber::get_widgets('spot-1');
	$context['sb-spot-2'] = Timber::get_widgets('spot-2');
	$context['sb-spot-3'] = Timber::get_widgets('spot-3');
	$templates = array('home.twig');
} else {
	$templates = array('index.twig');
}
Timber::render($templates, $context);


