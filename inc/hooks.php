<?php
/**
 * Custom hooks.
 *
 * @package twoKgDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'twoKgDesign_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function twoKgDesign_site_info() {
    do_action( 'twoKgDesign_site_info' );
  }
}

if ( ! function_exists( 'twoKgDesign_add_site_info' ) ) {
  add_action( 'twoKgDesign_site_info', 'twoKgDesign_add_site_info' );

  /**
   * Add site info content.
   */
  function twoKgDesign_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s">%2$s</a><span class="sep">',
      esc_url( __( 'https://carlosalfaro.me/', 'twoKgDesign' ) ),
      sprintf(
        /* translators:*/
        esc_html__( 'Proudly Developed by %s', 'twoKgDesign' ), 'Carlos Alfaro'
      )
    );

    echo apply_filters( 'twoKgDesign_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
