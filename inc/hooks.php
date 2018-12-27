<?php
/**
 * Custom hooks.
 *
 * @package 2kgDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( '2kgDesign_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function 2kgDesign_site_info() {
    do_action( '2kgDesign_site_info' );
  }
}

if ( ! function_exists( '2kgDesign_add_site_info' ) ) {
  add_action( '2kgDesign_site_info', '2kgDesign_add_site_info' );

  /**
   * Add site info content.
   */
  function 2kgDesign_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s">%2$s</a><span class="sep">',
      esc_url( __( 'https://carlosalfaro.me/', '2kgDesign' ) ),
      sprintf(
        /* translators:*/
        esc_html__( 'Proudly Developed by %s', '2kgDesign' ), 'Carlos Alfaro'
      )
    );

    echo apply_filters( '2kgDesign_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
