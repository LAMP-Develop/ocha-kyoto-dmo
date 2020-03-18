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
    autoplaySpeed: 4000,
    adaptiveHeight: true,
    fade: true,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false
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


  // gallery download
  if (('sessionStorage' in window) && (window.sessionStorage !== null)) {
    console.log('ok');
  } else {
    console.log('no');
  }
  if (sessionStorage.getItem('count') == null) {
    $('.download-btn .counts').text('0');
  } else {
    $('.download-btn .counts').text(sessionStorage.getItem('count'));
  }
  $('.gallery-lists .card').on('click', function() {
    let url = $(this).attr('data-src');
    let count = $('.download-btn .counts');
    let plus = parseInt(count.text()) + 1;
    count.text(plus);
    sessionStorage.setItem('count', plus);

    if (sessionStorage.getItem('imgs') == null) {
      sessionStorage.setItem('imgs', url);
    } else {
      let temp = sessionStorage.getItem('imgs') + ',' + url;
      sessionStorage.setItem('imgs', temp);
    }
  });
  $('.select-imgs .img').on('click', function() {
    $(this).remove();
    let url = $(this).attr('data-src');
    let idx = imgs.indexOf(url);
    if (idx >= 0) {
      imgs.splice(idx, 1);
    }
    if (imgs.length != 0) {
      let arr = imgs.join(',');
      sessionStorage.setItem('imgs', arr);
    } else {
      sessionStorage.removeItem('imgs');
    }
    if (sessionStorage.getItem('count') != null) {
      let num = sessionStorage.getItem('count');
      num--;
      sessionStorage.setItem('count', num);
    }
  });
  // sessionStorage clear
  // sessionStorage.clear();
});