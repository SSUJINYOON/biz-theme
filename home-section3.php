<script src="<?php bloginfo('template_directory'); ?>/js/home-section3.js"></script>
<section class="home-section home-section3" data-n="3">
  <figure class="bg"></figure>
  <div class="slider">
    <div class="overflow">
      <div class="col_width">
        <ul class="img_container">
        </ul><!--img_container-->
        <script>
          homeSection2Arr.forEach(function(v, i) {
            $('.home-section3 .img_container').append(`
              <li>
                <figure>
                  <img src="<?php bloginfo('template_directory'); ?>/img/home/section2-${i+1}.jpg">
                </figure>
                <div class="textbox">
                  <h3>${v.title}</h3>
                  <p>${v.desc}</p>
                </div>
              </li>
            `)
          }) //forEach
        </script>
      </div><!-- col_width -->
    </div><!--overflow-->
    <div class="btn-container">
      <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
      <div class="indicator">
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
      </div>
      <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div><!-- slider -->
</section>