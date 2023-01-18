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
	//---------------------------------------

	// Banners Swiper
		var swiper = new Swiper('.mySwiper', {
			speed: 1000,
			parallax: true,
			loop: true,
			spaceBetween: 5,
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
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + (index + 1) + "</span>";
				},
			},
		});
		
	// Swiper page noticias
		var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 3,
				slidesPerColumn: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
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
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + (index + 1) + "</span>";
			},
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				slidesPerColumn: 1,
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 1,
				slidesPerColumn: 1,
			},
			// when window width is >= 640px
			770: {
				slidesPerView: 1,
				slidesPerColumn: 1,
			}
		}
    });

	//label animada
		var floatLabel = document.querySelectorAll(".float-label");
		var onFloatLabelChange = function () {
			if (this.value.length == 0) {
				this.dataset.empty = null;
			} else {
				delete this.dataset.empty;
			}
		}

		floatLabel = [].slice.apply(floatLabel);
		floatLabel.forEach(function (container) {
			var input = container.querySelector("input");
			input.addEventListener("keyup", onFloatLabelChange);
		});

		$('.input2').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
});