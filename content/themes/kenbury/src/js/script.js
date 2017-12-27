// =============================================================================
// JS Document File
// =============================================================================

$(window).load(function() { //Pre Loader
  $('body').addClass('loaded');
  //$('.spinner').remove();
});

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


//Menu Animation
(function($){
  'use strict';
	
  $('#toggle').on( 'click', function() {
    // Wrap every letter in a span
    $('#menu-main-menu li a').each(function(){
      $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });
    anime.timeline()
    .add({
      targets: '#menu-main-menu li a .letter',
      translateX: [40,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 1000,
      delay: function(el, i) {
        return 100 + 30 * i;
      }
    });
  });
	
})(jQuery);

(function($){
  'use strict';

	$.ajax({
		url: '/get_tweets.php',
		type: 'GET',
		success: function(data) {
      
      $('.tweetLoader').remove();
      
      var tweet,
          imgURL = pathUrl.templateUrl + '/assets/images/twitter_logo_blue.svg';
      
      $.each(data, function(i, value) {
        tweet = "<a class='tweet' id='"+value.id+"' href='"+value.retweeted_status.entities.urls['0'].expanded_url+"' target='_blank'>"+
            "<div class='head'>"+
            "<div class='avatar'>"+
            "<img src='"+value.retweeted_status.user.profile_image_url+"' alt='Avatar'>"+
            "</div>"+
            "<div class='blkTitles'>"+
            "<h5>"+value.retweeted_status.user.name+"</h5>"+
            "<h6>@"+value.retweeted_status.user.screen_name+"</h6>"+
            "</div>"+
            "<img class='twit-logo' src='"+imgURL+"' alt='Twiiter Logo'>"+
            "</div>"+
            "<div class='text'><p>"+value.text+"</p></div>"+
            "<div class='blk-interact'>"+
            "<div class='inner-blk ret-count'><span>"+value.retweet_count+"</span></div>"+
            "<div class='inner-blk user-ment'><span>"+value.entities.user_mentions.length+"</span></div>"+
            "<div class='inner-blk fav-count'><span>"+value.retweeted_status.favorite_count+"</span></div>"+
            "</div>"+
            "</a>";
        $(tweet).appendTo(".twitterApp .tweet-body");
      });
      
		},
    error: function( error ) {
      console.log(error);
    }
	});
  
})(jQuery);
    
