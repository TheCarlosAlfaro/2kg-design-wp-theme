<?php
/**
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package twoKgDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'twoKgDesign_container_type' );
?>

  <!-- Hero Section/Jumbotron -->
  <?php get_template_part( 'global-templates/jumbotron' ); ?>

  <!-- About Section -->
  <?php get_template_part( 'parts/welcome-section' ); ?>

  <!-- Services Section -->
  <?php get_template_part( 'parts/services-section' ); ?>

  <!-- Team Section -->
  <?php //get_template_part( 'parts/team-section' ); ?>

  <!-- Blog Section -->
  <?php get_template_part( 'parts/blog-section' ); ?>

  <!-- Contact Section -->
  <?php get_template_part( 'parts/contact-section' ); ?>
					

<?php get_footer(); ?>
