<?php include "sub-header.php" ?>
<script src="<?php bloginfo('template_directory'); ?>/js/page-history.js"></script>
  <section class="history-section">
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

    
    <p class="theme-guide">
      page-history.php, page-history.scss에서 수정/ 편집 하실 수 있습니다<br>
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
    
    
    <div class="theme-desc">
      저희 회사의 성장 과정입니다. <br>
      멈추지 않고 자라는 IT 회사가 되도록 노력하겠습니다
    </div>
   

    <!--페이지 출력 시작-->
    <ol class="history history1"></ol>
    <script>
      window.yearArr1.forEach(function(v){
        $('ol.history1').append(`
          <li>
            <div>
              <h3>${v.year}<sub>년</sub></h3>
              <ul></ul>
            </div>
            <figure>
            </figure>
          </li>
        `)//history append
        v.monthArr.forEach(function(m){
          $('ol.history li:last-child div ul').append(`
            <li> ${m} </li>
          `)
        })//month forEach
        v.imgArr.forEach(function(i){
          $('ol.history li:last-child figure').append(`
            <img src="<?php bloginfo('template_directory'); ?>/img/sub3/${i}" alt>
          `)
        })//month forEach
      })//year forEach
    </script>


    <!--페이지 출력 끝-->
  </section>
<?php include "sub-footer.php" ?>