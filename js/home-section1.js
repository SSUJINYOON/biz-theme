$(function () {
  /* --------------------------------------------- */
  //video
  /* --------------------------------------------- */
  $(window).load(function(){
    function videoPlay() {
      var offsetTop2 = $('.home-section2-scr').offset().top
      var offsetTop3 = $('.home-section3-scr').offset().top
      if (scrY >= offsetTop3) {
        $('.home-video')[0].currentTime = 0
        $('.home-video')[0].pause()
      }else if(scrY < offsetTop2){
        $('.home-video')[0].play() 
      }
    }//fn
  
    videoPlay()
    $(window).scroll(function () {
      videoPlay()
    })
  })//load event
  /* --------------------------------------------- */
  //text delay motion setting
  /* --------------------------------------------- */
  var str ; var strArr

  str = $('.home-section1 .textbox em').text().trim()
  strArr = str.split('')
  $('.home-section1 .textbox em').empty()
  strArr.forEach(function (v,i) {
    let char
    if (v === ' ') {
      char = '&nbsp'
    } else {
      char = v
    }
    $('.home-section1 .textbox em').append(`
      <span style="transition-delay:${i*0.05}s">${char}</span>
    `)
  })//forEach

  str = $('.home-section1 .textbox p').text().trim()
  strArr = str.split('')
  $('.home-section1 .textbox p').empty()
  strArr.forEach(function(v,i){
    if(v===' '){v = '&nbsp;'}
    if(v==='/'){v = '<br>'}
    $('.home-section1 .textbox p').append(`
      <span style="transition-delay:${i*0.05}s">${v}</span> 
    `)
  })//forEach

  /* --------------------------------------------- */
  //text scroll motion
  /* --------------------------------------------- */
  function textMotion() {
    var offsetTop2 = $('.home-section2-scr').offset().top
    if(scrY < offsetTop2){
      $('.home-section1 .textbox span').addClass('active')
    }else{
      $('.home-section1 .textbox span').removeClass('active')
    }
  }//fn
  
  textMotion()
  $(window).scroll(function () {
    textMotion()
  }).resize(function () {
    textMotion()
  })

})//ready