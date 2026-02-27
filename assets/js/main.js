;(function($){

$(document).ready(function(){

//========== HEADER ACTIVE STRATS ============= //
  var windowOn = $(window);
  windowOn.on('scroll', function () {
    var scroll = windowOn.scrollTop();
    if (scroll < 100) {
      $("#vl-header-sticky").removeClass("header-sticky");
    } else {
      $("#vl-header-sticky").addClass("header-sticky");
    }
  });
  
//========== HEADER ACTIVE ENDS ============= //

//========== PAGE PROGRESS STARTS ============= // 
  var progressPath = document.querySelector(".progress-wrap path");
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition =
  "none";
  progressPath.style.strokeDasharray = pathLength + " " + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition =
    "stroke-dashoffset 10ms linear";
  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength) / height;
    progressPath.style.strokeDashoffset = progress;
  };
  updateProgress();
  $(window).scroll(updateProgress);
  var offset = 50;
  var duration = 550;
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery(".progress-wrap").addClass("active-progress");
    } else {
      jQuery(".progress-wrap").removeClass("active-progress");
    }
  });
  jQuery(".progress-wrap").on("click", function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });
//========== PAGE PROGRESS STARTS ============= // 

//========== MOBILE MENU STARTS ============= //
  var vlMenuWrap = $('.vl-mobile-menu-active > ul').clone();
  var vlSideMenu = $('.vl-offcanvas-menu nav');
  vlSideMenu.append(vlMenuWrap);
  
  if ($(vlSideMenu).find('.sub-menu, .vl-mega-menu').length !== 0) {
    $(vlSideMenu).find('.sub-menu, .vl-mega-menu').parent().append('<button class="vl-menu-close"><i class="fas fa-chevron-right"></i></button>');
  }

  var sideMenuList = $('.vl-offcanvas-menu nav > ul > li button.vl-menu-close, .vl-offcanvas-menu nav > ul li.has-dropdown > a');
  $(sideMenuList).on('click', function (e) {
    e.preventDefault();
    var $parent = $(this).parent();

    if (!$parent.hasClass('active')) {
      $parent.addClass('active');
      $(this).siblings('.sub-menu, .vl-mega-menu').slideDown();
    } else {
      $(this).siblings('.sub-menu, .vl-mega-menu').slideUp();
      $parent.removeClass('active');
    }
  });

  $(".vl-offcanvas-toggle").on('click', function() {
    $(".vl-offcanvas").addClass("vl-offcanvas-open");
    $(".vl-offcanvas-overlay").addClass("vl-offcanvas-overlay-open");
  });

  $(".vl-offcanvas-close-toggle, .vl-offcanvas-overlay").on('click', function() {
    $(".vl-offcanvas").removeClass("vl-offcanvas-open");
    $(".vl-offcanvas-overlay").removeClass("vl-offcanvas-overlay-open");
  });
//========== MOBILE MENU ENDS ============= //

AOS.init;
AOS.init({disable: 'mobile'});

});


//========== SIDEBAR/SEARCH AREA ============= //
$(".header-search-btn").on("click", function (e) {
  e.preventDefault();
  $(".header-search-form-wrapper").addClass("open");
  $('.header-search-form-wrapper input[type="search"]').focus();
  $('.body-overlay').addClass('active');
});

$(".tx-search-close, .body-overlay").on("click", function (e) {
  e.preventDefault();
  $(".header-search-form-wrapper").removeClass("open");
  $('.body-overlay').removeClass('active');
});
//========== SIDEBAR/SEARCH AREA ============= //

$('.popup-image').magnificPopup({
    type: 'image',
    mainClass: 'mfp-fade',
    removalDelay: 300,
    gallery: { enabled: true }
  });

  //========== VIDEO POPUP STARTS ============= //
   if ($(".popup-youtube").length > 0) {
    $(".popup-youtube").magnificPopup({
    type: "iframe",
    });
    }
//========== VIDEO POPUP ENDS ============= //
//========== COUNTER UP============= //
const ucounter = $('.counter');
if (ucounter.length > 0) {
  ucounter.countUp();
};


//========== PRELOADER ============= //
  $(window).on("load", function (event) {
    setTimeout(function () {
      $(".preloader").fadeToggle();
    }, 200);
  
  });

var $window = $(window);
var $parallaxie = $('.parallaxie');

if ($parallaxie.length && ($window.width() > 991)) {
    if ($window.width() > 768) {
        $parallaxie.parallaxie({
            speed: 0.55,
            offset: 0,
        });
    }
}



// slider 




 var swiper = new Swiper(".myhero1", {
  loop:true,
     speed:2000,
     effect: "fade",
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
      navigation: {
        nextEl: ".next-arrow",
        prevEl: ".prev-arrow",
      },
      
    });


   var swiper = new Swiper(".our_services1", {
      slidesPerView: 3,
      spaceBetween: 30,
       loop: true,
      autoplay: {
        delay: 3000,
      },
       navigation: {
        nextEl: ".prev-arrow",
        prevEl: ".next-arrow",
      },
      
          // Breakpoints
      breakpoints: {
        375: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      
    });


   var swiper = new Swiper(".mySwipertestimo1", {
      slidesPerView: 1,
      speed:1000,
       loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".next-arrow",
        prevEl: ".prev-arrow",
      },
        breakpoints: {
        375: {
        },
       }, 
    });


    var swiper = new Swiper(".vlservice3", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      loop: true,
       autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
      350:  { slidesPerView: 1, spaceBetween: 20 },  // small phones: show a peek
      640:  { slidesPerView: 2,    spaceBetween: 14 },  // larger phones
      900:  { slidesPerView: 2,    spaceBetween: 20 },  // tablets / small desktops
      1200: { slidesPerView: 3,    spaceBetween: 30 }   // large desktops
     }



    });


       var swiper = new Swiper(".testimonials3", {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: true,
       autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
       breakpoints: {
      355:  { slidesPerView: 1, spaceBetween: 12 },  // small phones: show a peek
      640:  { slidesPerView: 1,    spaceBetween: 14 },  // larger phones
      1000:  { slidesPerView: 1,    spaceBetween: 20 },  // tablets / small desktops
      1100:  { slidesPerView: 2,    spaceBetween: 20 },  // tablets / small desktops
     }

    });



  var swiper = new Swiper(".mytesti-hm4", {
      slidesPerView: 3,
      spaceBetween: 30,
      speed:1000,
      loop: true,
      autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
       navigation: {
        nextEl: ".next-arrow",
        prevEl: ".prev-arrow",
      },
       breakpoints: {
      355:  { slidesPerView: 1, spaceBetween: 12 },  // small phones: show a peek
      640:  { slidesPerView: 1,    spaceBetween: 14 },  // larger phones
      1000:  { slidesPerView: 2,    spaceBetween: 30 },  // tablets / small desktops
      1200:  { slidesPerView: 3,    spaceBetween: 30 }, 
     }
    });


    var swiper = new Swiper(".myhero9", {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      speed:1000,
      autoplay: {
        delay: 3000,
      },
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      navigation: {
          nextEl: ".prev-arrow",
          prevEl: ".next-arrow",
        },
     breakpoints: {
      300:  { slidesPerView: 1, spaceBetween: 12 },  // small phones: show a peek
      426:  { slidesPerView: 3,    spaceBetween: 14 },  // larger phones
       }
    });



    var swiper = new Swiper(".myhero10", {
      slidesPerView: 1,
      loop: true,
      speed:1000,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: ".next-arrow",
        prevEl: ".prev-arrow",
      },
    });





     var swiper_text = new Swiper(".tpcauses-text-slider-active", {
        slidesPerView: 'auto',
        spaceBetween: 40,
        freemode: true,
        centeredSlides: true,
        loop: true,
        speed: 4000,
        allowTouchMove: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: true,
        }
    });


      $('.tpcauses-text-slider-active').on('hover',function(){
        swiper_text.autoplay.stop();
      }, function(){
        swiper_text.autoplay.start();
    });


    // nice select 
     
 $(document).ready(function() {
  $('select').niceSelect();
});


// Text Animation Gsap //
if($('.text-effect').length) {
    var textheading = $(".text-effect");

    if(textheading.length === 0) return; gsap.registerPlugin(SplitText); textheading.each(function(index, el) {

        el.split = new SplitText(el, { 
            type: "lines,words,chars",
            linesClass: "split-line"
        });

        if( $(el).hasClass('text-effect') ){
            gsap.set(el.split.chars, {
                opacity: .3,
                x: "-7",
            });
        }
        el.anim = gsap.to(el.split.chars, {
            scrollTrigger: {
                trigger: el,
                start: "top 92%",
                end: "top 60%",
                markers: false,
                scrub: 1,
            },

            x: "0",
            y: "0",
            opacity: 1,
            duration: .7,
            stagger: 0.2,
        });

    });
}

})(jQuery);




//========== GSAP AREA ============= //
if ($('.text-anime-style-1').length) {
  let staggerAmount 	= 0.05,
  translateXValue = 0,
  delayValue 		= 0.5,
   animatedTextElements = document.querySelectorAll('.text-anime-style-1');

  animatedTextElements.forEach((element) => {
  let animationSplitText = new SplitText(element, { type: "chars, words" });
    gsap.from(animationSplitText.words, {
    duration: 1,
    delay: delayValue,
    x: 20,
    autoAlpha: 0,
    stagger: staggerAmount,
    scrollTrigger: { trigger: element, start: "top 85%" },
    });
  });
  }

  // Text Animation 02 //
  if ($('.text-anime-style-2').length) {
  let	 staggerAmount 		= 0.05,
   translateXValue	= 20,
   delayValue 		= 0.5,
   easeType 			= "power2.out",
   animatedTextElements = document.querySelectorAll('.text-anime-style-2');

  animatedTextElements.forEach((element) => {
  let animationSplitText = new SplitText(element, { type: "chars, words" });
    gsap.from(animationSplitText.chars, {
      duration: 1,
      delay: delayValue,
      x: translateXValue,
      autoAlpha: 0,
      stagger: staggerAmount,
      ease: easeType,
      scrollTrigger: { trigger: element, start: "top 85%"},
    });
  });
  }

  // Text Animation 03 //
  if ($('.text-anime-style-3').length) {
  let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');

  animatedTextElements.forEach((element) => {
  //Reset if needed
  if (element.animation) {
    element.animation.progress(1).kill();
    element.split.revert();
  }

  element.split = new SplitText(element, {
    type: "lines,words,chars",
    linesClass: "split-line",
  });
  gsap.set(element, { perspective: 400 });

  gsap.set(element.split.chars, {
    opacity: 0,
    x: "50",
  });

  element.animation = gsap.to(element.split.chars, {
    scrollTrigger: { trigger: element,	start: "top 90%" },
    x: "0",
    y: "0",
    rotateX: "0",
    opacity: 1,
    duration: 1,
    ease: Back.easeOut,
    stagger: 0.02,
  });
  });
  }


// Image Animation //
  if($('.reveal').length){gsap.registerPlugin(ScrollTrigger);let revealContainers=document.querySelectorAll(".reveal");revealContainers.forEach((container)=>{let image=container.querySelector("img");let tl=gsap.timeline({scrollTrigger:{trigger:container,toggleActions:"play none none none"}});tl.set(container,{autoAlpha:1});tl.from(container,1.5,{xPercent:-100,ease:Power2.out});tl.from(image,1.5,{xPercent:100,scale:1.3,delay:-1.5,ease:Power2.out});});}





 /* ================================
        Mouse Cursor Animation Js Start
    ================================ */

    if ($(".mouseCursor").length > 0) {
        function itCursor() {
            var myCursor = jQuery(".mouseCursor");
            if (myCursor.length) {
                if ($("body")) {
                    const e = document.querySelector(".cursor-inner"),
                        t = document.querySelector(".cursor-outer");
                    let n, i = 0, o = !1;
                    window.onmousemove = function(s) {
                        if (!o) {
                            t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)";
                        }
                        e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)";
                        n = s.clientY;
                        i = s.clientX;
                    };
                    $("body").on("mouseenter", "button, a, .cursor-pointer", function() {
                        e.classList.add("cursor-hover");
                        t.classList.add("cursor-hover");
                    });
                    $("body").on("mouseleave", "button, a, .cursor-pointer", function() {
                        if (!($(this).is("a", "button") && $(this).closest(".cursor-pointer").length)) {
                            e.classList.remove("cursor-hover");
                            t.classList.remove("cursor-hover");
                        }
                    });
                    e.style.visibility = "visible";
                    t.style.visibility = "visible";
                }
            }
        }
        itCursor();
    }