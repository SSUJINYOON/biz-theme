<script src="<?php bloginfo('template_directory'); ?>/js/home-section4.js"></script>
<section class="home-section home-section4" data-n="4">
  <svg class="svg-filter">
    <filter id="filter">
      <feTurbulence id="water" numOctaves="3" seed="1" baseFrequency="0.02 0.5" />
      <feDisplacementMap scale="10" in="SourceGraphic" />
      <animate href="#water" attributeName="baseFrequency" keyTimes="0;0.5;1" values="0.002;0.008;0.002" dur="20s" repeatCount="indefinite" />
    </filter>
  </svg>
  <figure class="bg">
    <img src="<?php bloginfo('template_directory'); ?>/img/home/section3-bg.jpg" alt="">
  </figure>
  <div class="leaf-particle  particle-leaf"></div>
  <div class="home-section-content">
    <div class="inner">
      <div class="home-section-title">
        <h2>product</h2>
        <p>카테고리 최신글을 자동으로 출력하도록 구현하였습니다</p>
      </div><!-- title -->
      <!-- 카테고리 최신글을 출력 -->
      <div class="slider3d">
        <ul class="polygon3d">
          <?php
          $catquery = new WP_Query('cat=2&posts_per_page=10'); // 카테고리 ID, 표시 글 개수
          while ($catquery->have_posts()) : $catquery->the_post();
          ?>
            <li>
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <!--대표이미지 출력-->
                <figure>
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                  } ?>
                </figure>
                <div class="textbox">
                  <!--글제목 출력-->
                  <h3><?php the_title(); ?></h3>
                  <!--요약글 출력-->
                  <?php the_excerpt(); ?>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class="controls">
          <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
          <div class="indicator">
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
          </div><!-- indicator -->
          <button class="next"><i class="fa-solid fa-chevron-right"></i></button>      
        </div><!-- controls -->          
      </div><!-- slider3d -->
      <!-- 카테고리 최신글을 출력 끝 -->
    </div> <!-- inner -->
  </div><!-- content -->
</section>