(function ($) {
	
	"use strict";

	$(function() {
        $("#tabs").tabs();
    });

	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});
	

	$('.schedule-filter li').on('click', function() {
        var tsfilter = $(this).data('tsfilter');
        $('.schedule-filter li').removeClass('active');
        $(this).addClass('active');
        if (tsfilter == 'all') {
            $('.schedule-table').removeClass('filtering');
            $('.ts-item').removeClass('show');
        } else {
            $('.schedule-table').addClass('filtering');
        }
        $('.ts-item').each(function() {
            $(this).removeClass('show');
            if ($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });


	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
			$('a').each(function () {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
			var hash = this.hash;
			var target = $(hash);
			if (target.length && target.offset()) {
				$('html, body').stop().animate({
					scrollTop: (target.offset().top) + 1
				}, 500, 'swing', function () {
					window.location.hash = hash;
					$(document).on("scroll", onScroll);
				});
			} else {
				$(document).on("scroll", onScroll);
			}
	    });
	});

	function onScroll(event){
		var scrollPos = $(document).scrollTop();
		$('.nav a').each(function () {
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));
			if (refElement.length && refElement.position()) {
				if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
					$('.nav ul li a').removeClass("active");
					currLink.addClass("active");
				} else {
					currLink.removeClass("active");
				}
			}
		});
	}


	// Page loading animation
	 $(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 767) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);

// Daftar gambar yang ingin ditampilkan
const images = [
  "assets/images/background1.jpeg",
  "assets/images/background2.jpeg",
  "assets/images/background3.jpeg"
];

let current = 0;
const img = document.getElementById("bg-video");

// Fungsi untuk efek geser ke kiri saat ganti gambar
function slideToNext() {
  img.style.transition = "transform 0.5s, opacity 0.5s";
  img.style.transform = "translateX(-100%)";
  img.style.opacity = "0";

  setTimeout(() => {
    // Update gambar setelah animasi keluar
    current = (current + 1) % images.length;
    img.src = images[current];
    img.style.transition = "none";
    img.style.transform = "translateX(100%)";

    // Animasi masuk dari kanan
    setTimeout(() => {
      img.style.transition = "transform 0.5s, opacity 0.5s";
      img.style.transform = "translateX(0)";
      img.style.opacity = "1";
    }, 10);
  }, 500);
}

// Set interval untuk slideshow
// setInterval(slideToNext, 5000);
$('.loop').owlCarousel({
  center: false,
  items: 2,
  loop: true,
  margin: 20,
  nav: true,
  dots: true,
  autoplay: true,
  autoplayTimeout: 8000,
  mouseDrag: true,    // pastikan true (default)
  touchDrag: true,    // pastikan true (default)
  responsive:{
      992:{
          items:4
      }
  }
});