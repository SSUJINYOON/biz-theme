<?php include "sub-header.php" ?>
  <section>
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

    <!--안내문은 관리자 메뉴 페이지별로 출력해야 함
    <p class="theme-guide">
      페이지별로 다른 내용을 적기<br>
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
    -->
    <!-- 관리자 메뉴 페이지별로 설명을 추가해야 함
    <div class="theme-desc">
      ㅁㄴㅇㄻㅇㄴㄻㄴㅇ ㄹㅇㄴㅁ ㄴㅁㅇ
    </div>
     -->

    <!--페이지 출력 시작-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--페이지 본문 출력-->
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <!--페이지가 없을 경우 출력될 내용-->	
    <?php endif; ?>
    <!--페이지 출력 끝-->
  </section>
<?php include "sub-footer.php" ?>