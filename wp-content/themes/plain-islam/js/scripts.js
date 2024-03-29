
jQuery(document).ready(function($){
	
	// 'use strict';

	//Add class you mobile nav to add close functionality on click
	$(window).on('resize', function(){
	if ($(window).width() > 690){
	    $('nav').removeClass("mobile");
	  }else{
	    $('nav').addClass("mobile");
	  }
	}).resize();

	
	//View more bite-size on the homepage
	$('.bite-size__view-more-button').click(function(e){
		e.preventDefault();
		$('section#bite-size').addClass('auto-height');
		$('.load-more-container, .bite-size__view-more-button').fadeOut();
	});

	//Init bxslider
	$('ul.bx-slider').bxSlider({
		auto: true,
		mode: 'fade',
		pause: 7000,
		speed: 1200,
		// adaptiveHeight: true,

		randomStart: 'true',
	
	});

	var images = ['test-image2.jpg', 'test-image3.jpg', 'test-image4.jpg', 'test-image5.jpg', 'test-image6.jpg', 'test-image7.jpg', 'hero-image8.jpg', 'hero-image9.jpg', 'hero-image10.jpg', 'hero-image11.jpg', 'hero-image12.jpg', 'hero-image13.jpg', 'hero-image14.jpg', 'hero-image15.jpg', 'hero-image16.jpg' ];
    $('.random').css({'background-image': 'url(http://breakthroughmedia.org/pislam/wp-content/themes/plain-islam/img/' + images[Math.floor(Math.random() * images.length)] + ')'});

// $('.main-gallery').flickity({
//   // options
//   cellAlign: 'left',
//   contain: true,
//   autoPlay: true,
//   prevNextButtons: false
// });

	//
	$('button.burger-menu').click(function(){
		$('nav.mobile ul').slideToggle();
		$('#nav-icon3').toggleClass('open');
	});



	//homepage video lightbox
	$('#homepage-video-button').click(function(e){
		e.preventDefault();
		$('body').addClass("no-scroll");
		$('#video-lightbox').fadeIn(1100);
	});

	//Open lightbox
	$('#contact-button').click(function(){
		$('body').addClass("no-scroll");
		$('.contact-lightbox').fadeIn(1100);
		// centerLightbox();
	});


	//close contact lightbox
	$('button.close').click(function(){
		$('body').removeClass("no-scroll");
		$('section#lightbox, section#video-lightbox').fadeOut(1100);
	});

	 //center video in lightbox maths and style
	function centerLightbox (){
		//Variables for lightbox
		var windowHeight = $(window).height();
		var lightboxWrapper = $('.homepage-video-lightbox .wrapper');
		var lightboxWrapperHeight = lightboxWrapper.height();

		//Margintop: lightbox height - video height / 2
		lightboxWrapper.css('margin-top', - (lightboxWrapperHeight - windowHeight) / 2);
	}
	centerLightbox();

	$(window).resize(function(){
		centerLightbox();
	});

	//Scroll top
	$('.scroll-to-top').click(function(){
		$('body,html').animate({ scrollTop: 0 }, 'slow', 'swing');
	});


	//init
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
        }
      }
    );
    wow.init();

    //indepth scroll animation on nav
    $('#in-depth-nav').click(function(e){
    	e.preventDefault();
    	$('html,body').animate({scrollTop: $('section#in-depth').offset().top -85 }, "slow");
    });
	
	
});

