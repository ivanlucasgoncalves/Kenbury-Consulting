// =============================================================================
// JS Document File
// =============================================================================
  
  
//Unslider
(function($){
  'use strict';

  var slider = $('#slider').unslider({ 
    autoplay: true, 
    delay: 7000, 
    arrows: false,
    animation: 'fade',
  });
  slider.on('unslider.change', function() {});
  
  var testimonials = $('#slider-testimonials').unslider({
    autoplay: true, 
    delay: 9000,
    nav: false, 
    arrows: true,
    animation: 'horizontal',
  });
  testimonials.on('unslider.change', function() {});
  
})(jQuery);