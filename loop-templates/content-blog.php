<?php

/**
 * Post rendering content for blog page.
 *
 * @package twoKgDesign
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	<div class="col-lg">
          <div class="card blog__card--color flex-md-row mb-2 h-md-250">
            <div class="card-body blog__card--text d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                <a class="text-light" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              </h3>
              <div class="mb-1 text-secondary"><?php the_time('M d'); ?></div>
              <p class="card-text mb-auto text-light"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
              <a href="<?php the_permalink() ?>" class="text-secondary">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
          </div>
        </div>

	</header><!-- .entry-header -->





	

</article><!-- #post-## -->
