

gsap.to('#header', {
    duration: 0.5,
    position: 'sticky',
    top: '0px',
    left: '0px',
    boxShadow: 'rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px',
    // toggleActions: "restart pause resume reset",
    //              OnEnter OnLeave OnEnterBack OnLeaveBack
    scrollTrigger: {
        trigger: '#header',
        scroller: 'body',
        start: 'top -10%',
        end: 'top -11%',
        scrub: 1,
        // markers: true 
    }
});


VanillaTilt.init(document.querySelectorAll(".cards .card"));

document.addEventListener('DOMContentLoaded', function () {
    var swiper1 = new Swiper(".mySwiper1", {
        spaceBetween: 30,
        centeredSlides: true,
        speed: 2000,
        autoplay: {
          delay: 0,
        },
        // autoplay: false,
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: false,
        disableOnInteraction: true,
    });
    var swiper1 = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        centeredSlides: true,
        speed: 2000,
        autoplay: {
          delay: 0,
        },
        // autoplay: false,
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: false,
        disableOnInteraction: true,
    });
});



function handleQuestion(e){
    console.log('event: ', e.target.nextElementSibling);
    const answerEl = e.target.nextElementSibling;

    answerEl.classList.toggle('active');
}



let sections = document.querySelectorAll('section');
let links = document.querySelectorAll('#header .header_nav a');
window.onscroll = () => {
    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 400;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');
        if (top >= offset && top < offset + height) {
            links.forEach(link => {
                link.classList.remove('active');
                document.querySelector('#header .header_nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });
}

const testimonailSwiper = new Swiper(".swiper", {
	// Optional parameters
	direction: "horizontal",
	loop: true,
	autoHeight: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination"
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}

	// And if we need scrollbar
	/*scrollbar: {
    el: '.swiper-scrollbar',
  },*/
});



(function () {
    "use strict";
  
    var carousels = function () {
      $(".owl-carousel1").owlCarousel({
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          680: {
            items: 2,
            nav: false,
            loop: false
          },
          1000: {
            items: 3,
            nav: true
          }
        }
      });
    };
  
    (function ($) {
      carousels();
    })(jQuery);
  })();
  