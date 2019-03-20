<?php
/**
 * Partial template for content in page-{service}.php
 *
 * @package twoKgDesign
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


  <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

  <div class="entry-content">

    <div class="row negative-margin-top">
      <div class="col-md-4 pointer-cursor" data-toggle="modal" data-target="#exampleModal">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-1.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
      <div class="col-md-4">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-2.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
      <div class="col-md-4">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-3.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-1.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
      <div class="col-md-4">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-2.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
      <div class="col-md-4">
        <img src="http://2kg-design.local/wp-content/uploads/2019/03/fake-logo-3.jpg" alt="..."
          class="img-thumbnail mt-4">
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-brand">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <div class="row"> -->
            <img src="http://2kg-design.local/wp-content/uploads/2019/03/modal-image.jpg" alt="..."
              class="img-thumbnail">
            <!-- </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php the_content(); ?>

    <?php
        wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'twoKgDesign'),
          'after'  => '</div>',
        ));
        ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php edit_post_link(__('Edit', 'twoKgDesign'), '<span class="edit-link">', '</span>'); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->