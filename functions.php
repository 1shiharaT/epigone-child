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

$include_files = array(
	array( 'inc/customizer.php' ),
);

$include_files = $include_files;

foreach ( $include_files as $key => $files ) {
	if ( $filename = locate_template( $files, false ) ) {
		load_template( $filename , true );
	}
}

/**
 * Load parent theme file.
 */
load_template( get_template_directory() . '/inc/init.php', true );

/**
 * Child theme setup.
 */
add_action( 'init', 'epigone_child_setup' );

function epigone_child_setup() {

	add_theme_support( 'responsive_nav' );

}

/**
 * This theme original enqueue media.
 */
add_action( 'wp_enqueue_scripts', 'epigone_child_scripts', 10 );

function epigone_child_scripts() {
	/**
	 * theme main stylesheet
	 */

	wp_enqueue_style( 'epigone_blog', get_stylesheet_directory_uri() . '/assets/css/theme-blog.min.css', false, '99972085bc30c435929f5af3cf81d064' );

	if ( current_theme_supports( 'responsive_nav' ) ) {
		if ( wp_is_mobile() ) {
			wp_enqueue_style( 'epigone_responsive_nav_css', get_stylesheet_directory_uri() . '/assets/components/responsive-nav/responsive-nav.css', false, '99972085bc30c435929f5af3cf81d064' );
			wp_register_script( 'epigone_responsive_nav_js', get_stylesheet_directory_uri() . '/assets/components/responsive-nav/responsive-nav.min.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'epigone_responsive_nav_js' );
		}
	}

}
