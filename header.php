<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
  <?php wp_head(); ?>

  <link rel="short icon" href="<?php bloginfo('template_directory'); ?>/img/icon&logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/kboard.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/ultimate-faqs.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/contact-form.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp-member.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animation.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/scrollbar.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/YouTube-Playlist-Player.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/isotope.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/leaf-particle.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/login-menu.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/logo.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu-btn.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gnb.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gnb-lg.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lang-menu.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sub-visual.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/snb.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sub-layout.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/category.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/category-prd-list.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/category-prd-gallery.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-section1.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-section2.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-section3.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-section4.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-section5.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-greet.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-history.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-location.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-biz-intro.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-biz-area.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-biz-guide.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/preloader.css">

  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/common.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/type_effect.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/grained.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/hoverBox.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/jquery.isotope.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/responsive_carousel_horz.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/jquery.ripples-min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/leaf.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/carousel_3d.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/store.js"></script>
  
</head>

<body <?php body_class(); ?>>

<?php include "preloader.php" ?>
  <script src="<?php bloginfo('template_directory');?>/js/header.js"></script>

  <h1 class="site-logo">
    <?php include "logo.php" ?>
  </h1>

  <nav class="outlogin"> 
    <?php include "login.php" ?>
  </nav>

  <header>
    <nav class="gnb-lg">
      <?php wp_nav_menu( array('theme_location' => 'menu'));?>
    </nav>
    <button class="menu-btn">
      <i class="bar1"></i>
      <i class="bar2"></i>
      <i class="bar3"></i>
      <b>menu</b>
    </button>
    <?php include "lang-menu.php" ?>
  </header>
  
  <nav class="gnb">
    <?php include "img/icon&logo/logo.php" ?>
    <?php wp_nav_menu( array('theme_location' => 'menu'));?>
    <?php include "lang-menu.php" ?>
    <?php include "login.php" ?>
  </nav>