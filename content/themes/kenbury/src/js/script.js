// =============================================================================
// JS Document File
// =============================================================================
  
jQuery(document).ready(function () {
    
    //Unslider
    (function(){
      'use strict';

      var slider = $('#slider').unslider({ 
        autoplay: true, 
        delay: 5000, 
        arrows: false 
      });
      
      slider.on('unslider.change', function() {
        
      });
      
    })();
    
    //Mobile Menu
    (function(){
      'use strict';
  		
      // this hides or shows the mobile menu when the nav button is pressed
      $('#nav-icon').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('#menu-mobile').toggleClass('nav-active');
      });
  		
  	})();
    
    
});

