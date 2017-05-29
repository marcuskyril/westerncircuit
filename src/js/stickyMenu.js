let stickyMenu = {
	appearAfter(offset) {
		let menus = $('header');

		$(window).scroll(debounce(function() {

			if ($(this).scrollTop() >= offset) {
				menus.addClass('is-sticky animated slideInDown');
				$('#countdownTimer').css('display', 'none');
			} else {
				menus.removeClass('is-sticky animated slideInDown');
				$('#countdownTimer').css('display', 'block');
			}
		}, 300));
	},

	init() {
		stickyMenu.appearAfter(300);
	}
}

stickyMenu.init();
