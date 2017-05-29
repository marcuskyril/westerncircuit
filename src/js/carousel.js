require('slick-carousel')

$(function(){
  $('.carousel').slick({
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false
        }
      }
    ]
  });
});
