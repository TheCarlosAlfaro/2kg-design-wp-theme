<?php

/**
 * Jumbotron setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- Hero Section -->
<section id="hero-section">

  <div class="jumbotron jumbotron-fluid"
    style="height: 88vh;
  background-image: url('<?php the_field('hero_image') ?>'); 
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-position: 50% 50%;">

    <div class="hero-content">

      <!-- <div>
        <img src="" alt="" class="heading-logo mb-5">
      </div> -->

      <h1 class="hero__title">We help companies create digital experiences,
        <br>
        reach customers, and grow.
        <br>
        <strong>We love what we do.</strong>
      </h1>
      <p>
        <a class="hero__services" href="#">
          <span>BRANDING.</span>
          <span>DIGITAL MARKETING.</span>
          <span>VIDEO.</span>
          <span>WEB DESIGN.</span>
        </a>
      </p>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-block-xs-only mb-3 mr-2" data-toggle="modal"
        data-target="#exampleModal">
        <i class="fa fa-play" aria-hidden="true"></i> WATCH OUR VIDEO
      </button>
      <a href="#contact-section" class="btn btn-secondary btn-block-xs-only mb-3">
        <i class="fa fa-envelope" aria-hidden="true"></i> CONTACT US
      </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="iframe-container">
              <iframe width="1280" height="720" src="https://www.youtube.com/embed/CX37OTc3nBo" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social">
      <a href="https://www.facebook.com/2kgdesign/" target="_blank">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/2kgdesign/" target="_blank">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCB66Vlv_LKolcW3zdQ59SoQ" target="_blank">
        <i class="fa fa-youtube"></i>
      </a>
    </div>


  </div>

</section>