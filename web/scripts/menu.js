"use strict";

function Menu (sSelector) {
	var m = this;

	// 1. Data
	m.menu = $(sSelector);

	// 2. Logic ====================
	m.showSubmenu = function (){
		// подменю текущего пункта меню - показать
		// $(this).children('.sub-menu').show();
		// $(this).children('.sub-menu').addClass('sub-menu_shown');
		// $(this).children('.sub-menu').stop().slideDown();
		// m.toggleSubmenu(this);
		// $(this).children('.sub-menu').stop().fadeIn();
		$(this)
			.children('.sub-menu')
				.css({'display':'block'})
				.stop()
				.animate(
					{
						'opacity' : 1
						}
					, 400
					);

		}

	m.hideSubmenu = function (){
		// подменю текущего пункта меню - скрыть
		// $(this).children('.sub-menu').hide();
		// $(this).children('.sub-menu').removeClass('sub-menu_shown');
		// $(this).children('.sub-menu').stop().slideUp();
		// m.toggleSubmenu(this);
		$(this)
			.children('.sub-menu')
				.stop()
				.animate(
					{
						'opacity' : 0
						}
					, 400
					, function (){
						$(this).css({'display':'none'})
						}
					)
				;

		}
	m.toggleSubmenu = function (oMenuItem){
		$(oMenuItem).children('.sub-menu').stop().slideToggle();
		}
	// 3. Events =============================
	m.menu.find('.main-menu__item')
		.mouseover(m.showSubmenu)
		.mouseout(m.hideSubmenu)
		;

	}
