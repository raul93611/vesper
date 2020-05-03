<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pracmatik</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
        ?>
        <!--<a href="<?php home_url("/");?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/LOGO-OFICIAL-solo-letras.png" alt="" class="img-fluid"></a>-->
      </div>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'superior',
        'container' => 'nav',
        'container_class' => 'nav-menu d-none d-lg-block',
        'items_wrap' => '<ul>%3$s</ul>'
      ));
      ?>
    </div>
  </header>
