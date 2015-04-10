
jQuery(document).ready(function($){
	
	// 'use strict';
	
	//View more bite-size on the homepage
	$('.bite-size__view-more-button').click(function(e){
		e.preventDefault();
		$('section#bite-size').addClass('auto-height');
		$('.load-more-container, .bite-size__view-more-button').fadeOut();
	});

	//Init bxslider
	$('ul.bx-slider').bxSlider({
		auto: true,
		mode: 'horizontal',
		pause: 7000,
	});

	//homepage video lightbox
	$('#homepage-video-button').click(function(e){
		e.preventDefault();
		$('body').addClass("no-scroll");
		$('#video-lightbox').fadeIn();
	});

	//Open lightbox


	//close contact lightbox
	$('button.close').click(function(){
		$('body').removeClass("no-scroll");
		$('section#lightbox, section#video-lightbox').fadeOut();
	});

	 //center video in lightbox maths and style
	function centerLightbox (){
		//Variables for lightbox
		var windowHeight = $(window).height();
		var lightboxWrapper = $('.lightbox .wrapper');
		var lightboxWrapperHeight = lightboxWrapper.height();

		//Margintop: lightbox height - video height / 2
		lightboxWrapper.css('margin-top', - (lightboxWrapperHeight - windowHeight) / 2);
	}
	centerLightbox();

	$(window).resize(function(){
		centerLightbox();
	});

	
	
})(jQuery);

