<?php include "sub-header.php" ?>
  <section class="biz-intro-section">
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

   
    <p class="theme-guide">
      page-biz-intro.php, page-biz-intro.scss 파일을 이용해<br>
      해당 페이지를 수정/편집 하실 수 있습니다.
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
    
    
    <div class="theme-desc">
      자사에서 제공하는 서비스 내용을 소개합니다.
    </div>
    

    <!--페이지 출력 시작-->
    <ol>
      <li>
        <b>01</b>
          <figure>
            <figcaption>
              <h3>
                합리적인 창업비용 제시
                <ul>
                  <li>비즈니스 파트너와 더 큰 가치를 만들겠습니다.</li>
                  <li>기업별/업종별 환경에 맞는 최상의 솔루션을 제공하고 있습니다.</li>
                  <li>최고의 납품 서비스를 통해 고객의 비즈니스 성공을 이루어갑니다.</li>
                </ul>
              </h3>
            </figcaption>
            <img src="<?php bloginfo('template_directory'); ?>/img/sub2/biz-img1.jpg" alt="">
          </figure>
      </li>
      <li>
        <b>02</b>
          <figure>
            <figcaption>
              <h3>
              간편한 조리 방식으로 인건비 절감
                <ul>
                  <li>비즈니스 파트너와 더 큰 가치를 만들겠습니다.</li>
                  <li>기업별/업종별 환경에 맞는 최상의 솔루션을 제공하고 있습니다.</li>
                  <li>최고의 납품 서비스를 통해 고객의 비즈니스 성공을 이루어갑니다.</li>
                </ul>
              </h3>
            </figcaption>
            <img src="<?php bloginfo('template_directory'); ?>/img/sub2/biz-img2.jpg" alt="">
          </figure>
      </li>
      <li>
        <b>03</b>
          <figure>
            <figcaption>
              <h3>
              낮은 재고 부담
                <ul>
                  <li>비즈니스 파트너와 더 큰 가치를 만들겠습니다.</li>
                  <li>기업별/업종별 환경에 맞는 최상의 솔루션을 제공하고 있습니다.</li>
                  <li>최고의 납품 서비스를 통해 고객의 비즈니스 성공을 이루어갑니다.</li>
                </ul>
              </h3>
            </figcaption>
            <img src="<?php bloginfo('template_directory'); ?>/img/sub2/biz-img3.jpg" alt="">
          </figure>
      </li>
      <li>
        <b>04</b>
          <figure>
            <figcaption>
              <h3>
              타 브랜드 대비 높은 수익률
                <ul>
                  <li>비즈니스 파트너와 더 큰 가치를 만들겠습니다.</li>
                  <li>기업별/업종별 환경에 맞는 최상의 솔루션을 제공하고 있습니다.</li>
                  <li>최고의 납품 서비스를 통해 고객의 비즈니스 성공을 이루어갑니다.</li>
                </ul>
              </h3>
            </figcaption>
            <img src="<?php bloginfo('template_directory'); ?>/img/sub2/biz-img4.jpg" alt="">
          </figure>
      </li>
    </ol>
    <!--페이지 출력 끝-->
  </section>
<?php include "sub-footer.php" ?>