"use strict";

$(document).ready(function () {

  function msieversion() { // ie detection

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    var value = null;

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
        // alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
        value = true;
    }
    else  // If another browser, return 0
    {
        // alert('otherbrowser');
        value = false
    }

    return value;
  }

  if( msieversion() ) {
    $('body').addClass('ie-browser');
  }

  (function ($, undefined) { //
        var  menuBlock = $("#main-menu_1")
            ,menuBtn = menuBlock.find('.lines-button.x2')
            ,closeBtn = menuBlock.find('.main-menu__toggle-close')
            ,toggleMenu = menuBlock.find('.main-menu__toggle')
            ,toggleLinks = toggleMenu.find('.main-menu__link')
            ;
        menuBtn.on('click', function (event) {
          var  btn = $(this)
              ;
          btn.addClass("close");
          toggleMenu.slideDown(800);
        });
        closeBtn.on('click', function (event) {
          menuBtn.removeClass("close");
          toggleMenu.slideUp();
        });
        toggleLinks.on('click', function (event) {
          menuBtn.removeClass("close");
          toggleMenu.slideUp();
        });
  })($);

(function ($, undefined) { // button-up
    var btnUp = $("#button-up");
    $(window).scroll(function () {
        var scroll = $(this).scrollTop()
            ,maxScroll = $(document).height() - $(window).height()
            ;
        if ( scroll > maxScroll - 300) {
          btnUp.addClass("button-up_active")
                .stop().animate({
                  "right" : 0
                  }
                  ,400
                  );
        }
        else {
         btnUp.stop().animate({
                  "right" : -200+"px"
                  }
                  , 400
                  , function () {
                    $(this).removeClass("button-up_active");
                    }
                  );
        }
    });
    btnUp.bind('click', function (event) {
      event.preventDefault();
      $("body, html").animate({
        "scrollTop" : 0
        }
        ,500);
    });
  })($);

  (function ($, undefined) { // message-popup
       var  popupForm    = $(".form-popup")
         ,popupFormBtn = popupForm.find('.form-popup__close-btn')
         ,messageBlock = popupForm.children('.form-popup__inner')
         ;
       popupForm.css('height', window.outerHeight );
       popupFormBtn.bind("click", function (event) {
         $(this).closest('.form-popup').animate({
           "opacity" : 0
           }
           ,400
           ,function () {
             $(this).css("display","none").removeClass('show');
             }
           );
       });
   })($);

(function ($, undefined) { // header sticky
   var  header = $(".header_main-page")
       ,wrapper = $('.wrapper')
       ,logo = header.find('.logo')
       ;
  if ( header.length ) {
    $(window).scroll(function (event) {
      var scroll = $(this).scrollTop();
      if ( scroll <= $(".main-block").innerHeight() ) {
        header.removeClass("header_bg");
      }
      else {
        header.addClass("header_bg");
      }
    });
  }
 })($);

(function($,undefined){
    var  slider = $("#benefits__slider_1")
        ;

    if (slider.length) {
      var swiper = new Swiper('#benefits__slider_1', {
        pagination: '.swiper-pagination',
        // prevButton: '.goods-sliders__container-btn-next',
        // nextButton: '.goods-sliders__container-btn-prev',
        // loop: true,
        slidesPerView: 3,
        // slidesPerGroup: 5,
        initialSlide: 0,
        paginationClickable: true,
        spaceBetween: 36,
        breakpoints: {
            1400: {
                slidesPerView: 3
                // slidesPerGroup: 3,
                // spaceBetween: 36,
                // initialSlide: 2
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 36
            },
            640: {
                slidesPerView: 1
            },
            320: {
                slidesPerView: 1
            }
        }
      });
    }
  })($);

(function($,undefined){
   var  slider = $("#products__slider_1")
       ;
   if (slider.length) {
     var dots = slider.attr('data-dots').split(',');
    //  slider.css("height", slider.find(".swiper-slide").innerHeight()+10 );
     var swiper = new Swiper('#products__slider_1', {
       pagination: slider.find('.swiper-pagination'),
       paginationClickable: true,
       slidesPerView: 1,
       autoHeight: false,
       direction: 'vertical',
       onSlideChangeEnd: function (swiper) {
        //  console.log("swiper--", swiper);
        //  slider.css("height", slider.find(".swiper-slide").innerHeight()+10 );
        //  console.debug(slider.find(".swiper-slide.swiper-slide-active"));
        //  slider.css("height", slider.find(".swiper-slide-active").children().innerHeight()+10 );
       },
       paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + dots[index] + '&nbsp; \
                    <i class="fa fa-angle-right"></i></span>';
       },
       breakpoints: {
           768: {
          //     direction: 'horizontal',
          //     slidesPerView: 1,
              autoHeight: true
          //      // spaceBetween: 36
           }
       }
     });
   }
 })($);

(function($,undefined){
  var  slider = $("#certificates__slider_1")
      ;

  if (slider.length) {
    var swiper = new Swiper('#certificates__slider_1', {
      pagination: '.swiper-pagination',
      // prevButton: '.goods-sliders__container-btn-next',
      // nextButton: '.goods-sliders__container-btn-prev',
      // loop: true,
      slidesPerView: 3,
      // slidesPerGroup: 5,
      initialSlide: 0,
      paginationClickable: true,
      spaceBetween: 36,
      breakpoints: {
          1400: {
              slidesPerView: 3
              // slidesPerGroup: 3,
              // spaceBetween: 36,
              // initialSlide: 2
          },
          768: {
              slidesPerView: 2
              // spaceBetween: 36
          },
          640: {
              slidesPerView: 1
          },
          320: {
              slidesPerView: 1
          }
      }
    });
  }
})($);

});
