$(function () {

  $('.tabmenu button').click(function(){
    var board = $(this).attr('data-board')
    $('.latest-board').hide()
    $(board).show()
    $('.tabmenu button').removeClass('active')
    $(this).addClass('active')
  })

})//ready