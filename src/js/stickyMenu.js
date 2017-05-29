let stickyMenu = {
	appearAfter(offset) {
		let menus = $('header');

		$(window).scroll(debounce(function() {
			
			if ($(this).scrollTop() >= offset) {
				menus.addClass('is-sticky animated slideInDown');
			} else {
				menus.removeClass('is-sticky animated slideInDown');
			}
		}, 300));
	},

	init() {
		stickyMenu.appearAfter(300);
	}
}

stickyMenu.init();