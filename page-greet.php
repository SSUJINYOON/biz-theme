<?php include "sub-header.php" ?>
  <section class="greet-section">
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

   
    <p class="theme-guide">
      page-greet.php, page-greet.scss 파일을 이용해 수정 편집하실 수 있습니다<br>
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
   
    
    <div class="theme-desc">
      저희 회사 홈페이지를 방문하신 고객 여러분을 환영합니다. <br>
      최고의 IT 서비스를 제공하기 위해 끊임없이 노력하겠습니다.
    </div>
    

    <!--페이지 출력 시작-->
    <div class="wrap">
      <img src="<?php bloginfo('template_directory');?>/img/sub1/intro1.jpg" alt="">
      <div class="textbox">
        <em>안녕하십니까?</em>
        <p>
        저희 회사 홈페이지를 방문하신 고객 여러분을 환영합니다.
        회사설립 이후, 어느새 6년이라는 세월이 흘렀습니다.
        그동안 고객 여러분께서 회사에 보여주신 관심과 성원에 깊은 감사드립니다.
        앞으로도 고객님의 성원에 힘 입어, 더욱 알찬 제품과 서비스를 제공하겠습니다.
        </p>
        <p>
        최고의 IT 서비스 기업임을 자부하고 있는 저희 회사는 지난 1999년 설립된 이후, 고객과 사회의 이익을 위해 끊임없이 연구하고 노력 발전해왔습니다.
        고객에게 지속적인 양질의 서비스를 제공하는 것을 최고의 목표로 하는 저희 회사는, 인터넷을 기반으로 하는 온라인의 가상세계를 더욱 풍요롭고 쾌적한 환경으로 창출하고 발전시키고자 합니다.
        </p>
        <p>
        고객 여러분의 목소리에 귀 기울이고 고객 여러분의 기대에 부응하겠습니다.
        다시 한번 저희 홈페이지를 찾아주신 고객 여러분께 감사의 말씀을 드립니다.
        늘 변함없이 고객과 사회 모두에 기여하는 기업이 되도록 노력하겠습니다.
        </p>

        <em><sub>대표이사</sub>
          박명식
        </em>
      </div>
    </div>
    <!--페이지 출력 끝-->

  </section>
<?php include "sub-footer.php" ?>