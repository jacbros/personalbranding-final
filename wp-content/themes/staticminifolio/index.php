<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php language_attributes(); ?>">
<!--<![endif]-->

<head>
<meta charset="">
<meta name="description" content="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Minifolio - Bootstrap Responsive Resume, Personal Portfolio Template</title>
<?php wp_head(); ?>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="#"><img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="Mafolio"></a>
      <nav class="navigation" role="navigation">
        <?php wp_nav_menu(array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'primary-nav') ); ?>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="<?php echo get_theme_file_uri('/video/showreel-preview.mp4'); ?>" type="video/mp4">
    </video>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <?php 
        if(is_active_sidebar('banner')){
            dynamic_sidebar('banner');
            
        }
        ?>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="aboutme" class="section descripton">
  <div class="container">
    <?php 
    if(is_active_sidebar('about-me')){
            dynamic_sidebar('about-me');
            
        }
    ?>
    <div class="col-md-10 col-md-offset-1 space">
      <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- portfolio section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-1.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-1.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-2.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-2.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-3.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-3.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-4.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-4.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Graphic Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-5.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-5.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-6.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-6.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-7.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-7.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo get_theme_file_uri('images/work-8.jpg'); ?>" class="work-box"> <img src="<?php echo get_theme_file_uri('images/work-8.jpg'); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- portfolio section --> 
<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Need something specific?</h3>
      <p>We are currently crafting new products but would love to hear from you.</p>
      <a href="#contact" class="btn btn-large">Hire me</a> </div>
  </div>
</section>
<!-- hire me section --> 



<section id="contact" class="section contact">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
        <?php 
            if(is_active_sidebar( 'hire-me' )) {
                dynamic_sidebar( 'hire-me' );
            }
        ?>
      <!--contact form start-->
      <div class="col-md-6 col-md-offset-3 conForm">
        <div id="message"></div>
        <?php 
        if(is_active_sidebar( 'contact' )){
            dynamic_sidebar( 'contact' );
        }
        ?>
      </div>
      <!--contact form end--> 
    </div>
  </div>
</section>


<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
        </ul>
        </p>
        <?php
        if(is_active_sidebar( 'footer' )){
            dynamic_sidebar( 'footer' );
        }
        ?>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<!-- JS FILES --> 
<?php
wp_footer();
?>
</body>
</html>