import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';


export function init(){
  // 輪播
  // resources/js/app.js
  // $(document).ready(function () {
    $('.homeSlick1').slick({
      arrows: false,
      autoplay: true,
      infinite: true,
    })
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
    }).on('init reInit', function() {
      ScrollTrigger.refresh(); // Slick 初始化後刷新 ScrollTrigger
    });
  // });
}