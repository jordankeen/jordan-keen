$(function(){
	// init for AOS animations
	// https://michalsnik.github.io/aos/
	AOS.init({
		offset: 200, 
  		duration: 700, 
  		once: true
  	});
	// open/close of nav
	$('.menu-button').on('click', function() {
		$(this).toggleClass('active');
		$('nav').toggleClass('open');
	});
});