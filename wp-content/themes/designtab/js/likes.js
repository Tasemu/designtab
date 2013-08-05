jQuery( document ).ready( function( $ ) {

	var isHoveringFB = false;

	$('.social-box li:first-child .socialover').hover(function() {
		isHoveringFB = true;

		$('#fblike').stop().fadeOut('fast', function() {
			
			if(isHoveringFB)	
			{
				$('#fbinfo').fadeIn('fast');
			}
		});
	}, function() {
		isHoveringFB = false;
		$('#fbinfo').fadeOut('fast', function(){
			$('#fblike').fadeIn('fast');
		});
		
	});

	var isHoveringTW = false;

	$('.social-box li:nth-child(2) .socialover').hover(function() {
		isHoveringTW = true;

		$('#twitterlike').stop().fadeOut('fast', function() {
			
			if(isHoveringTW)	
			{
				$('#twitterinfo').fadeIn('fast');
			}
		});
	}, function() {
		isHoveringTW = false;
		$('#twitterinfo').fadeOut('fast', function(){
			$('#twitterlike').fadeIn('fast');
		});
		
	});

	var isHoveringYT = false;

	$('.social-box li:nth-child(3) .socialover').hover(function() {
		isHoveringYT = true;

		$('#youtube').stop().fadeOut('fast', function() {
			
			if(isHoveringYT)	
			{
				$('#youtubeinfo').fadeIn('fast');
			}
		});
	}, function() {
		isHoveringYT = false;
		$('#youtubeinfo').fadeOut('fast', function(){
			$('#youtube').fadeIn('fast');
		});
		
	});



	
	$.get("https://graph.facebook.com/aaradiome",
		    function(data) {
		     $('#fbinfo').html( "<h1>" + data.likes + "</h1><span class='like-status'>Likes</span>")
		   }, "json")

	$.getJSON("https://twitter.com/users/Raadiome.json?callback=?",
	 function(data) { 
	   $('#twitterinfo').append( "<h1>" + data.followers_count + "</h1><span class='like-status'>Followers</span>" );
	});

	$.get("https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCxf4DCu_34O58nvhAGLOJZQ&key=AIzaSyBwJm3w75By1WNsSC3BTzMwxZc8JgcOn-Y",
		function(data) {
			$('#youtubeinfo').append("<h1>" + data.items[0].statistics.subscriberCount + "</h1><span class='like-status'>Subscribers</span></h1>")
		})
} );