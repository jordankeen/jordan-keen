$(function(){

	

	AOS.init({
		offset: 0, // offset (in px) from the original trigger point
  		duration: 600, // values from 0 to 3000, with step 50ms);
  		once: true
  	});

	$('.menu-button').on('click', function() {
		$(this).toggleClass('active');
		$('nav').toggleClass('open');
	});


});