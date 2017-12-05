// =============================================================================
// JS Document File
// =============================================================================

//Scroll Menu
(function($){
  'use strict';
	
  $( window ).scroll(function() {
    var scroll = $(this).scrollTop();
		if (scroll > 0) {
      $( ".top-header" ).addClass( "active-head" );
    } else {
      $( ".top-header" ).removeClass( "active-head" );
    }
  });
	
})(jQuery);
    
