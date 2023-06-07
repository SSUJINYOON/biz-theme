<?php get_header(); ?>

<!--중앙-->
<script src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>
<main class="home-main">
  <?php include "home-section1.php" ?>
  <?php include "home-section2.php" ?>
  <?php include "home-section3.php" ?>
  <?php include "home-section4.php" ?>
  <?php include "home-section5.php" ?>
  <div class="home-section-scr home-section1-scr"></div>
  <div class="home-section-scr home-section2-scr"></div>
  <div class="home-section-scr home-section3-scr"></div>
  <div class="home-section-scr home-section4-scr"></div>
  <div class="home-section-scr home-section5-scr"></div>
</main>
<nav class="scroll-spy">
  <button class="scroll-btn1" data-n="1"><i>home</i></button>
  <button class="scroll-btn2" data-n="2"><i>company</i></button>
  <button class="scroll-btn3" data-n="3"><i>business</i></button>
  <button class="scroll-btn4" data-n="4"><i>product</i></button>
  <button class="scroll-btn5" data-n="5"><i>recently</i></button>
</nav>
<!--중앙끝-->

<?php get_footer(); ?>