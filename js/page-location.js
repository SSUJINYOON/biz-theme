$(function() {
  $('.tabmenu button').click(function() {
    var n = $(this).attr('data-n')
    $('.gmap iframe').removeClass('active')
    $('.gmap .map'+n).addClass('active')
    $('.address-container address').removeClass('active')
    $('.address-container .address'+n).addClass('active')
    $('.tabmenu button').removeClass('active')
    $(this).addClass('active')
  })
})