<?php include "sub-header.php" ?>
<script src="<?php bloginfo('template_directory'); ?>/js/page-location.js"></script>
  <section class="location-section">
    <!--페이지 제목 출력-->
    <h2 class="sub-title">
      <em data-title="<?php the_title(); ?>">
        <!--before 인사말-->
        <span class="hidden"><?php the_title(); ?></span > 
        <!--after 인사말-->
      </em>
    </h2>

    
    <p class="theme-guide">
      page-location.php, php-location.scss 파일을 이용해 수정/편집 하실 수 있습니다.<br>
      <button><i class="fa-solid fa-circle-xmark"></i></button>
    </p>
   
    
    <div class="theme-desc">
      자사의 홈페이지에 방문 하신 걸 환영합니다 <br>
      찾아오시는 길 안내입니다
    </div>
     

    <!--페이지 출력 시작-->
    <div class="tabmenu">
      <button data-n="1" class="btn1 active">서울본사</button>
      <button data-n="2" class="btn2">인천본사</button>
      <button data-n="3" class="btn3">제주본사</button>
    </div>

    <div class="adress-container">
      <h3>서울본사</h3>
      <address class="address1 active">
        <p>
          <em>주소</em>
          <b>서울 중구 세종대로 110 (지번) 태평로1가 31</b>
        </p>
        <p>
          <em>전화문의</em>
          <b>010-3217-3646</b>
        </p>
        <p>
          <em>메일</em>
          <b>abc@naver.com</b>
        </p>
        <p>
          <em>운영시간</em>
          <b>평일 09:00 ~ 18:00</b>
        </p>
      </address>
      <address class="address2">
        <h3>인천본사</h3>
        <p>
          <em>주소</em>
          <b>인천광역시 부평구 세종대로 (지번) 태평로1가 31</b>
        </p>
        <p>
          <em>전화문의</em>
          <b>010-3217-3646</b>
        </p>
        <p>
          <em>메일</em>
          <b>abc@naver.com</b>
        </p>
        <p>
          <em>운영시간</em>
          <b>평일 09:00 ~ 18:00</b>
        </p>
      </address>
      <address class="address3">
        <h3>제주본사</h3>
        <p>
          <em>주소</em>
          <b>제주 서귀포시 세종대로 110 (지번) 태평로1가 31</b>
        </p>
        <p>
          <em>전화문의</em>
          <b>010-3217-3646</b>
        </p>
        <p>
          <em>메일</em>
          <b>abc@naver.com</b>
        </p>
        <p>
          <em>운영시간</em>
          <b>평일 09:00 ~ 18:00</b>
        </p>
      </address>
    </div>


    <!--페이지 출력 끝-->
    <div class="gmap">
      <iframe class="map1 active" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.5990329934866!2d126.9771495859261!3d37.56450963640769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2f332cb082b%3A0xe92b70ac420cf0a8!2z7ISc7Jq47Yq567OE7Iuc7LKt!5e0!3m2!1sko!2skr!4v1673572028717!5m2!1sko!2skr"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <iframe class="map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.199459326876!2d126.70265277648862!3d37.45601227206736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7be65ab384b5%3A0x1f50b5e68b6f9f68!2z7J247LKc6rSR7Jet7Iuc7LKt!5e0!3m2!1sko!2skr!4v1673572010829!5m2!1sko!2skr"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <iframe class="map3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13309.01778330115!2d126.50582941935428!3d33.49475652394916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350cfcae537cd439%3A0xd7a0bcd187c7bcce!2z7KCc7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1673571988445!5m2!1sko!2skr"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
<?php include "sub-footer.php" ?>