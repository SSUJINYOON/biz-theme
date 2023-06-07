<?php include "sub-header.php" ?>
  <section class="biz-area-section">
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

   
    <p class="theme-guide">
      page-biz-area.php, page-biz-area.scss 파일을 이용해<br>
      해당 페이지를 수정/편집 하실 수 있습니다.
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
    
    
    <div class="theme-desc">
      자사에서 제공하는 서비스 내용을 소개합니다.
    </div>
    

    <!--페이지 출력 시작-->
    <ul>
      <li>
        <div class="textbox">
          <h3>반응형 홈페이지</h3>
          <p>
          한페이지로 구성된 반응형 홈페이지 입니다. <br>
          원하는 디자인으로 조합하여 홈페이지를 만들어 드립니다.<br>
          <br>
          혁신을 성공적으로 지원해온 바로 그 솔루션을 만나보세요.<br>
          예술과 기술이 만나 홈 인테리어라는 새로운 개념을 제안합니다<br>
          중소기업에서 대기업까지 고객의 비즈니스 환경을 분석해 최적화된 비즈니스 환경을 구축합니다
          </p>
          <a href="#">브랜드 바로가기</a>
        </div>
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/img/sub3/1.jpg" alt="">
        </figure>
      </li>
      <li>
        <div class="textbox">
          <h3>반응형 홈페이지</h3>
          <p>
          한페이지로 구성된 반응형 홈페이지 입니다. <br>
          원하는 디자인으로 조합하여 홈페이지를 만들어 드립니다.<br>
          <br>
          혁신을 성공적으로 지원해온 바로 그 솔루션을 만나보세요.<br>
          예술과 기술이 만나 홈 인테리어라는 새로운 개념을 제안합니다<br>
          중소기업에서 대기업까지 고객의 비즈니스 환경을 분석해 최적화된 비즈니스 환경을 구축합니다
          </p>
          <a href="#">브랜드 바로가기</a>
        </div>
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/img/sub3/3.jpg" alt="">
        </figure>
      </li>
      <li>
        <div class="textbox">
          <h3>반응형 홈페이지</h3>
          <p>
          한페이지로 구성된 반응형 홈페이지 입니다. <br>
          원하는 디자인으로 조합하여 홈페이지를 만들어 드립니다.<br>
          <br>
          혁신을 성공적으로 지원해온 바로 그 솔루션을 만나보세요.<br>
          예술과 기술이 만나 홈 인테리어라는 새로운 개념을 제안합니다<br>
          중소기업에서 대기업까지 고객의 비즈니스 환경을 분석해 최적화된 비즈니스 환경을 구축합니다
          </p>
          <a href="#">브랜드 바로가기</a>
        </div>
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/img/sub3/6.jpg" alt="">
        </figure>
      </li>
    </ul>
    <!--페이지 출력 끝-->
  </section>
<?php include "sub-footer.php" ?>