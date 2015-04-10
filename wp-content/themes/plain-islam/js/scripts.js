(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		//View more bite-size on the homepage
		$('.bite-size__view-more-button').click(function(e){
			e.preventDefault();
			$('section#bite-size').addClass('auto-height');
			$('.load-more-container, .bite-size__view-more-button').fadeOut();
		});

		//Open

		//close contact lightbox
		$('button.close').click(function(){
			$('section#lightbox').fadeOut();
		});

		
		
	});
	
})(jQuery, this);
