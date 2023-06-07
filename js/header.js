$(function(){
  /* menu-btn---------------------------- */
  $('.menu-btn').click(function(){
    $('.gnb').toggleClass('active')
    $(this).toggleClass('active')
    $('.gnb>div>ul>li>ul').stop().slideUp()
    $('.gnb>div>ul>li>a').removeClass('active')
  })//click
  /* gnb 1dep a---------------------------- */
  $('.gnb>div>ul>li>a').click(function(e){
    e.preventDefault()
    $('.gnb>div>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb>div>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  }) 
  $('.gnb-lg>div>ul>li>a, .gnb>div>ul>li>ul>li>a').click(function(e){
    e.preventDefault()
    $('body').css({'overflow':'hidden'})
    $('.preloader').removeClass('active')
    var link = $(this).attr('href')
    setTimeout(function(){
      location.href=link
    },300)
  })


})//ready