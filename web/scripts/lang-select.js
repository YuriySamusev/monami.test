"use strict";

function Langselect (sSelector) {
	var l = this;

	// Data
	l.main = $(sSelector);
	l.langItem     = l.main.find('.lang-select__item');
	l.langList     = l.main.find('.lang-list');
	l.langListItem = l.langList.children('.lang-list__item');
	
	// Logic
	l.openLangs = function () {
		l.langItem.addClass("lang-select__item_active");
		l.langList.slideDown();
	}
	l.closeLangs = function (event) {
		l.langItem.removeClass("lang-select__item_active");
		l.langList.slideUp();
	}
	l.clickLink = function (event) {
		var link = $(this);
		l.closeLangs();
		alert("link");
	}
	l.docEvent = function (event) {
		if (!	l.main.is(event.target) // if the target of the click isn't the container...
		        && l.main.has(event.target).length === 0) // ... nor a descendant of the container
		    {
		        l.closeLangs();
		    }
	}
	//Events
	l.langItem.bind('click', l.openLangs);
	$(document).mouseup(l.docEvent);
}