<script src="<?php bloginfo('template_directory'); ?>/js/home-section5.js"></script>
<section class="home-section home-section5" data-n="5">
    <!-- particles.js container -->
    <script src="<?php bloginfo('template_directory'); ?>/js/particles.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app_particle_star.js"></script>
    <div id="particles-js"></div>
    <!-- particles.js container -->
    <div class="home-section-content">
        <div class="inner">
            <div class="home-section-title">
                <h2>recently</h2>
                <p>게시판 최신글을 자동으로 출력하도록 구현하였습니다</p>
            </div><!-- title -->
            <div class="latest">
                <div class="tabmenu">
                    <button data-board=".latest-notice">공지사항</button>
                    <button data-board=".latest-freeboard">자유게시판</button>
                </div>
                <div class="latest-board latest-notice">
                    <?php 
                    $homeURL = home_url( '/' );
                    $kboardID = "1" ;		
                    $kboardPAGE = "notice";
                    $kboardCnt = "5";
                    $kboardSTR = '[kboard_latest id="1" url="'.$homeURL.$kboardPAGE.'" rpp="'.$kboardCnt.'"]'; 
                    echo do_shortcode( $kboardSTR ); 
                    ?>
                </div><!-- notice -->
                <div class="latest-board latest-freeboard">
                    <?php 
                    $homeURL = home_url( '/' );
                    $kboardID = "2" ;		
                    $kboardPAGE = "freeboard";
                    $kboardCnt = "5";
                    $kboardSTR = '[kboard_latest id="2" url="'.$homeURL.$kboardPAGE.'" rpp="'.$kboardCnt.'"]'; 
                    echo do_shortcode( $kboardSTR ); 
                    ?>
                </div><!-- freeboard -->
            </div><!-- latest -->
        </div><!-- inner -->
    </div><!-- content -->
</section>