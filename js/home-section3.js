$(function () {
  $('.home-section3 .bg').ripples({
    resolution: 512,
    dropRadius: 50,
    perturbance: 0.01,
  });

  responsive_carousel_horz(".home-section3 .slider", false, 5000, 10000)
})//ready