<footer id="footer">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 text-lg-left text-center">
        <div class="copyright">
          &copy; Copyright <strong>Pracmatik</strong>. Todos los derechos reservados.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
        </div>
      </div>
      <div class="col-lg-6">
        <?php
        $bottom_menu = array(
          'theme_location' => 'inferior',
          'container' => 'nav',
          'echo' => false,
          'container_class' => 'footer-links text-lg-right text-center pt-2 pt-lg-0',
          'items_wrap' => '%3$s',
        );
        echo strip_tags(wp_nav_menu( $bottom_menu ), '<nav><a>' );
        ?>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Vendor JS Files -->
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/counterup/counterup.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/main.js"></script>
</body>

</html>
