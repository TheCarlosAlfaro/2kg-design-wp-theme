<?php
/**
 * Check and setup theme's default settings
 *
 * @package 2kgDesign
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( '2kgDesign_setup_theme_default_settings' ) ) {
	function 2kgDesign_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$2kgDesign_posts_index_style = get_theme_mod( '2kgDesign_posts_index_style' );
		if ( '' == $2kgDesign_posts_index_style ) {
			set_theme_mod( '2kgDesign_posts_index_style', 'default' );
		}

		// Sidebar position.
		$2kgDesign_sidebar_position = get_theme_mod( '2kgDesign_sidebar_position' );
		if ( '' == $2kgDesign_sidebar_position ) {
			set_theme_mod( '2kgDesign_sidebar_position', 'right' );
		}

		// Container width.
		$2kgDesign_container_type = get_theme_mod( '2kgDesign_container_type' );
		if ( '' == $2kgDesign_container_type ) {
			set_theme_mod( '2kgDesign_container_type', 'container' );
		}
	}
}