<?php

/**
 * Blog Section.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- about-section -->

<?php 
  // the query 
$latest_posts = new WP_Query(array(
  'numberposts' => 2,
  'post_type' => 'post'
));

?>

<section id="blog-section" class="py-5 text-light">
  <div class="container">
    <h3 class="text-center mb-5 display-4 text-light">THE BLOG</h3>
    <div class="row mb-2">

    <?php 
    $recentPosts = new WP_Query( array(
      'posts_per_page' => 2,

    ));
    
    while ($recentPosts->have_posts()) {
      $recentPosts->the_post(); ?>

        <div class="col-lg">
          <div class="card blog__card--color flex-md-row mb-2 h-md-250">
            <div class="card-body blog__card--text d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                <a class="text-light" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              </h3>
              <div class="mb-1 text-secondary"><?php the_time('M d'); ?></div>
              <p class="card-text mb-auto"><?php echo wp_trim_words(get_the_content(), 10); ?></p>
              <a href="<?php the_permalink() ?>" class="text-secondary">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
          </div>
        </div>
      
    <?php } wp_reset_postdata();
    
    ?>
      </div>

    <div class="row">
      <div class="col-sm text-center mt-5">
        <a href="<?php echo site_url('/blog'); ?>" class="btn btn-primary mb-3">
           FIND MORE CONTENT
        </a>
      </div>
    </div>
     
  </div>


</section>