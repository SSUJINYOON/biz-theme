$(function(){
  function motion(){
  $('.history > li').each(function(){
    var offsetTop = $(this).offset().top
    if(scrY >= offsetTop - winH * 0.5){
      $(this).addClass('active')
    } else {
      $(this).removeClass('active')
    }
  })//each
 }
 
 
 motion()
 $(window).resize(function(){
   motion()
  }).scroll(function(){
    motion()
  })
  
})//fn