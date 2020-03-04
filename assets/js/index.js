// CSSインポート
import '../sass/app.scss';

// JSインポート
FontAwesomeConfig = {
  searchPseudoElements: true
};
import '@fortawesome/fontawesome-free/js/all.js';
import 'slick-carousel';

const IScroll = require('iscroll');
require('jquery-drawer');

// ここからJS
$(document).ready(function() {
  let w = $(window).width();

  // drawer
  if (w <= 768) {
    $('.drawer').drawer();
  }

  // slick
  $('.mv').slick({
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true
  });
  $('.tours-slider').slick({
    infinite: true,
    arrows: false,
    dots: true,
    slidesToShow: 3,
    centerMode: true,
    centerPadding: '15vw',
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.gallery-pics').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 5,
    centerMode: true,
    centerPadding: '10vw',
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }]
  });

  $('.nav-for .imgs').on('click', function() {
    let src = $(this).attr('data-src');
    if (src != null) {
      $('.tours-img .img img').attr('src', src);
    }
  });
});