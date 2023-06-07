$(function(){
  /* 첫페이지주소검사 스크롤바 숨기기------------------------------------------- */
  var url = location.href
  var domain = location.protocol+'//'+location.hostname+'/'

  if(url === domain){
    //$('body').css({'overflow':'hidden'})  
  }

  /* 미디어 쿼리 여부에 따라 header크기 반영--------------------------------------------- */
  var headerH
  function fnHeaderHeight(){
    if(matchMedia('(min-width:1100px)').matches){
      headerH = 0
    }else{
      headerH = 70
    }
  }//fn
  fnHeaderHeight()
  $(window).resize(function(){
    fnHeaderHeight()
  })
  
  /* 섹션별 휠 이벤트 ------------------------------------------- */
  var isWheel = true
  $('.home-section').bind('mousewheel',function(e){
    if(!isWheel) return false
    isWheel = false
    setTimeout(function(){
      isWheel=true
    },300)
    window.smoothScroll = false
    var delta = e.originalEvent.wheelDelta / -120 
    var current = parseInt($(this).attr('data-n'))
    var target = delta + current 
    if(target===0){target=1}
    if(target===7){target=6}
    if(target===6){
      $('.home-section5').attr('data-n','6')
      var footerH = $('footer').innerHeight()
      $('.home-section').css({'transform':`translateY(-${footerH}px)`})
    }else{
      $('.home-section5').attr('data-n','5')
      $('.home-section').css({'transform':`translateY(0px)`})
    }
    //스크롤이동명령어
    $('body,html').stop().animate({'scrollTop': $('.home-section'+target+'-scr').offset().top - headerH})
    
    //active
    $('.home-section'+target).prevAll('.home-section').addClass('active')
    $('.home-section'+target).addClass('active')
    $('.home-section'+target).nextAll('.home-section').removeClass('active')

    return false
  })//secction mousewheel event
 
  /* 스크롤 스파이 버튼 ------------------------------------------- */
  $('.scroll-spy button').click(function(){
    var target = $(this).attr('data-n')

    //스크롤이동명령어
    $('body,html').stop().animate({'scrollTop': $('.home-section'+target+'-scr').offset().top - headerH + 1})
    
    //active
    $('.home-section'+target).prevAll('.home-section').addClass('active')
    $('.home-section'+target).addClass('active')
    $('.home-section'+target).nextAll('.home-section').removeClass('active')
  })//click

  /* 스크롤 스파이 (스크롤 위치에 따라서 다양한 모션)-------------------------------- */
  function fnScrollSpy(){
    var offset1 = $('.home-section1-scr').offset().top - headerH -1
    var offset2 = $('.home-section2-scr').offset().top - headerH -1
    var offset3 = $('.home-section3-scr').offset().top - headerH -1
    var offset4 = $('.home-section4-scr').offset().top - headerH -1
    var offset5 = $('.home-section5-scr').offset().top - headerH -1
    var current
    if(scrY < offset2){//1
      current = 1
    }else if(scrY  >= offset2 && scrY < offset3){//2
      current = 2
    }else if(scrY  >= offset3 && scrY < offset4){//3
      current = 3
    }else if(scrY  >= offset4 && scrY < offset5){//4
      current = 4
    }else{//5
      current = 5
    }//if 
  
    //btn active
    $('.scroll-spy button').removeClass('active')
    $(`.scroll-btn${current}`).addClass('active')
    
    //footer 보여주기
    if(scrY > offset5+4){
      var footerH = $('footer').innerHeight()
      $('.home-section').css({'transform':`translateY(-${footerH}px)`})
    }else{
      $('.home-section').css({'transform':`translateY(0px)`})
    }

    //section active
    $('.home-section'+current).prevAll('section').addClass('active')
    $('.home-section'+current).addClass('active')
    $('.home-section'+current).nextAll('section').removeClass('active')
  }//fn

  fnScrollSpy()
  $(window).resize(function(){
    fnScrollSpy()
  }).scroll(function(){
    fnScrollSpy()
  })//win event
})//function 