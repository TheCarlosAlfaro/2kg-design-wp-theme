<?php
/**
 * Template for Branding Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package twoKgDesign
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('twoKgDesign_container_type');
?>

<div class="wrapper" id="branding-page-wrapper">
  <div class="service-header text-center">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <h2 class="service-tagline">It is time to take the image of your company to the next Level</h2>
    <div class="service--description-container text-center">
      <p class="service--description-copy">
        Your Logo es the first thing your customers see. <br>
        Branding is what connects your company with the people. <br>
        We can help you to make a stron impression with your customers through our graphic design <br>
        and logo creation services.
      </p>
    </div>
  </div>

  <div class="<?php echo esc_attr($container); ?>" id="content">

    <div class="row">

      <div class="col-md-12 content-area" id="primary">

        <main class="site-main" id="main" role="main">

          <?php while (have_posts()) : the_post(); ?>

          <?php get_template_part('loop-templates/content', 'service'); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :

                      comments_template();

                    endif;
                    ?>

          <?php endwhile; ?>

        </main><!-- #main -->

      </div><!-- #primary -->

    </div><!-- .row end -->

  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>