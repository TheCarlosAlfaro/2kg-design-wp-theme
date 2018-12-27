<?php
/**
 * Check and setup theme's default settings
 *
 * @package twoKgDesign
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'twoKgDesign_setup_theme_default_settings' ) ) {
	function twoKgDesign_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$twoKgDesign_posts_index_style = get_theme_mod( 'twoKgDesign_posts_index_style' );
		if ( '' == $twoKgDesign_posts_index_style ) {
			set_theme_mod( 'twoKgDesign_posts_index_style', 'default' );
		}

		// Sidebar position.
		$twoKgDesign_sidebar_position = get_theme_mod( 'twoKgDesign_sidebar_position' );
		if ( '' == $twoKgDesign_sidebar_position ) {
			set_theme_mod( 'twoKgDesign_sidebar_position', 'right' );
		}

		// Container width.
		$twoKgDesign_container_type = get_theme_mod( 'twoKgDesign_container_type' );
		if ( '' == $twoKgDesign_container_type ) {
			set_theme_mod( 'twoKgDesign_container_type', 'container' );
		}
	}
}