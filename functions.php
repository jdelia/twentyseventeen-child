<?php
/**
 * The functions file for Child of Twentyseventeen theme.
 *
 * @package WordPress
 * @subpackage child_of_twentyseventeen
 * @since 1.0
 * @version 1.0
 */

/**
 * Since 1.0.
 */
function my_theme_enqueue_styles() {

	$parent_style = 'parent-twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-twentyseventeen-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * SVG icons functions and filters.
 */
include_once( get_stylesheet_directory() . '/inc/social-menu-links.php' );
