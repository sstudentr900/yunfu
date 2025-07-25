import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
export function init(){
  // resources/js/app.js
  $(document).ready(function () {
    $('.homeSlick1').slick({
      arrows: false,
      autoplay: true,
      infinite: true,
    });
    $('.homeSlick2').slick({
      arrows: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
        breakpoint: 1280,
        settings: {
          slidesToShow: 3
        },
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }, ]
    });
  });
}