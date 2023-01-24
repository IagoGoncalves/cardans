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
	// Clientes
	var swiper = new Swiper('.clientes-destaque', {
		slidesPerView: 5,
		spaceBetween: 30,		
		speed: 1500,
		loop: true,		
		breakpoints: {
			1200: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			425: {
				slidesPerView: 1,
				spaceBetween: 10,
			}
		},
		autoplay: {
			delay: 1000,
		},
		navigation: {
			nextEl: '.swiper-next',
			prevEl: '.swiper-prev',
		},
	});
	
});