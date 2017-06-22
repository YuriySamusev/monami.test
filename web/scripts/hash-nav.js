"use strict";

$(document).ready( function () {
	( window.location.hash ) ? showSection(window.location.hash, false) : checkSection();
	$('.main-menu__list').find('.main-menu__link_hash').bind("click", function (event) {
		event.preventDefault();
		showSection( $(this).attr("href"), true );
	});
	$('.header__button .btn_grad').bind("click", function (event) {
		event.preventDefault();
		showSection( $(this).attr("href"), true );
	});
});

$(window).bind( "scroll", function () {
	// console.log("scroll");
	checkSection();
});
function showSection (jqSection, isAnimate) {
	var  direction     = jqSection.replace(/#/, "")
			,reqSection    = $('.section').filter('[data-section="' + direction + '"]')
			,reqSectionPos = reqSection.offset().top-100
			// ,reqSectionPos = reqSection.offset().top
			;
	if ( isAnimate ) {
		$('body, html').animate({scrollTop: reqSectionPos}, 800);
	}
	else {
		$('body, html').scrollTop(reqSectionPos);
	}
}
function checkSection () {
	$(".section").each(function () {
		var
			 curSection = $(this)
			// ,topEdge    = curSection.offset().top
			,topEdge    = curSection.offset().top - curSection.height()/2.5
			,bottomEdge = topEdge + curSection.height()
			,wScroll    = $(window).scrollTop()
			;
		if(curSection.hasClass('contact')) {
			topEdge = curSection.offset().top - curSection.height();
		}
		if ( topEdge < wScroll && bottomEdge > wScroll ) {
			var  curData = curSection.attr("data-section")
					,regLink = $(".main-menu__link_hash").filter('[href="#' + curData + '"]')
					;
			regLink.closest(".main-menu__item")
				   .addClass("active")
				   .siblings()
				   .removeClass("active");
			window.location.hash = curData;
		}
	});
}
