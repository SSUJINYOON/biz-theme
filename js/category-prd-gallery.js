$(function(){
  function fn(){
    $('.list-container figure, .list-container .textbox').each(function(){
      var y = $(this).offset().top
      if(scrY >= y - winH * 0.8){
        $(this).addClass('active')
      }else{
        $(this).removeClass('active')
      }
    })
  }//fn()
  fn()
  $(window).scroll(function(){
    fn()
  }).resize(function(){
    fn()
  })
})//ready