$(function () {
  $('.home-section2 li').mouseenter(function () {
    $(this).find('.wrap').stop().slideDown()
    $(this).addClass('active')
    $('.home-section2 .bg').stop().fadeOut()
    $('.home-section2 .bg'+$(this).attr('data-n')).stop().fadeIn()
  }).mouseleave(function () {
    $(this).find('.wrap').stop().slideUp()
    $(this).removeClass('active')
  })

})//ready