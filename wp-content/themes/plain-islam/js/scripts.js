(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.bite-size__view-more-button').click(function(e){
			e.preventDefault();
			$('section#bite-size').addClass('auto-height');
			$('.load-more-container, .bite-size__view-more-button').fadeOut();
		});
		
	});
	
})(jQuery, this);
