jQuery( document ).ready( function( $ ) {

	$('.social-box li:first-child').hover(function() {
		$('#fblike').fadeOut('fast', function() {
			$('#fbinfo').fadeIn('fast');
		});
	}, function() {
		$('#fbinfo').fadeOut('fast', function() {
			$('#fblike').fadeIn('fast');
		});
	});

	$('.social-box li:nth-child(2)').hover(function() {
		$('#twitterlike').fadeOut('fast', function() {
			$('#twitterinfo').fadeIn('fast');
		});
	}, function() {
		$('#twitterinfo').fadeOut('fast', function() {
			$('#twitterlike').fadeIn('fast');
		});
	});

	$('.social-box li:nth-child(3)').hover(function() {
		$('#youtube').fadeOut('fast', function() {
			$('#youtubeinfo').fadeIn('fast');
		});
	}, function() {
		$('#youtubeinfo').fadeOut('fast', function() {
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