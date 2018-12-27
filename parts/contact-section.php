<?php

/**
 * Contact Section.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- about-section -->

<section id="contact-section" class="text-light">
  <div class="container-fluid">
    
    <div class="row">
      
      <div class="col-md mx-auto contact__left-side">
        <div class="container pt-5">
          <h3 class="text-center display-4">GET IN TOUCH</h3>
          <div class="text-center">
          <p class="footer__text--heading">Hours 9:00 AM - 8:00 PM</p>
            
            <p class="font-italic"><a href="tel:+702-822-6831" class="text-light"><i class="fa fa-phone"></i> (702)822-6831</a></p>
            <p class="font-italic text-light"><a href="mailto:info@2kgDesignlv.com" class="text-light"><i class="fa fa-envelope"></i> info@2kgDesignlv.com</a></p>
          </div>
          
          
          <?php echo do_shortcode("[contact-form-7 id='37' title='Contact form 1']"); ?>
            
        </div>
      </div>
      <div class="col-md">
        <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.02524166255!2d-115.20934038424164!3d36.165940380084066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c16df7988f87%3A0xad7baa47fa8ea55d!2s2kgDesign!5e0!3m2!1sen!2sus!4v1545247385357" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
      
    </div> 
    
     
  </div>


</section>