import '@fortawesome/fontawesome-free/js/all.min';
import './bootstrap';
import './parallax';
import './scroll';

import Swiper from 'swiper';
import WOW from 'wow.js';


const swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 45,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const wow = new WOW({
  boxClass:     'wow',      // animated element css class (default is wow)
  animateClass: 'animated', // animation css class (default is animated)
  offset:       0,          // distance to the element when triggering the animation (default is 0)
  mobile:       true,       // trigger animations on mobile devices (default is true)
  live:         true,       // act on asynchronously loaded content (default is true)
  callback:     function(box) {
    console.log('wow worked')
  // the callback is fired every time an animation is started
  // the argument that is passed in is the DOM node being animated
  },
  scrollContainer: null,    // optional scroll container selector, otherwise use window,
  resetAnimation: true,     // reset animation on end (default is true)
});
wow.init();
