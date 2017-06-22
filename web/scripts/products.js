"use strict";

function Products (sSelector) {
	var p = this;

	p.main = $(sSelector);
	//logic
	p.showHideBlock = function (jqBlock) {
		jqBlock.slideToggle();
	}
	p.handleClickItemBtn = function (event) {
		event.preventDefault();
		var pdItem = $(this).closest(".pd-item");
		var hiddenBlock = pdItem.find(".hidden-products");
		if (!hiddenBlock.length > 0) return null;
		if ( !pdItem.hasClass("pd-item_open") ) {
			pdItem.addClass('pd-item_open');
		} else {
			pdItem.removeClass('pd-item_open');
		}
		p.showHideBlock(hiddenBlock);
	}
	p.handleClickListLink = function (event) {
		event.preventDefault();
		var  curLink = $(this)
				,listItem = curLink.closest(".pd-list__item")
				,hiddenBlock = listItem.find(".pd-sub-list")
				;
		if (!hiddenBlock.length > 0) return null;
		if ( !curLink.hasClass('pd-list__link_open') ) {
			curLink.addClass('pd-list__link_open');
		} else {
			curLink.removeClass('pd-list__link_open');
		}
		p.showHideBlock(hiddenBlock);
	}
	//evt
	p.main.find('.pd-item__btn').bind("click", p.handleClickItemBtn);
	p.main.find('.pd-list__link').bind("click", p.handleClickListLink);
}
