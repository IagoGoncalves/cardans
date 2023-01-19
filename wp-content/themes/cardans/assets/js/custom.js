jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;

	// Menu fixo 
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 90) {
	    	$("#menu").addClass("menu-fixo");
	    } else {
	    	$("#menu").removeClass("menu-fixo");
	    }  
	});

	// Swiper banner
	var swiper = new Swiper('.banner-home', {
		speed: 2000,
		parallax: true,
		loop: true,
		spaceBetween: 30,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,

		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},    
	});
	
});