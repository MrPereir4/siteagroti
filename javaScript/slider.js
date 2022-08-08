



jQuery(document).ready(function ($) {

  var gadgetCarousel = $(".carousel");

  gadgetCarousel.each(function() {
    if ($(this).is(".slider")) {
		$(this).slick({
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      prevArrow: $('.next2'),
      nextArrow: $('.prev2')
      });
    }
    else if ($(this).is(".slider_mob")){
      $(this).slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        prevArrow: $('.next'),
        nextArrow: $('.prev')
      });
    }
    else if ($(this).is(".customer_logos")){
      $(this).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }]
      });
    }
    else {
      $(this).slick();
    }
  })


}); // end of os-carousel.js

//
//
// $(document).ready(function(){
//
//
//
//     $('.slider_mob').slick({
//       infinite: true,
//       speed: 300,
//       slidesToShow: 1,
//       prevArrow: $('.next'),
//       nextArrow: $('.prev')
//       });
// });
//
//
// $(document).ready(function(){
//   $('.slider').slick({
//     infinite: true,
//     speed: 300,
//     slidesToShow: 3,
//     prevArrow: $('.next'),
//     nextArrow: $('.prev')
//     });
// });
