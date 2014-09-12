<?php
/**
 * function for this child theme.
 * =====================================================
 * @package  epigone
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://scribu.net/wordpress/theme-wrappers.html
 * =====================================================
 */


load_template( get_template_directory() . '/inc/init.php', true );

add_action( 'wp_enqueue_scripts', 'epigone_child_scripts', 100 );

function epigone_child_scripts() {
	/**
	 * theme main stylesheet
	 */
	wp_enqueue_style( 'epigone_blog', get_stylesheet_directory_uri() . '/assets/css/theme-blog.min.css', false, '99972085bc30c435929f5af3cf81d064' );

}
