// @TODO - Add debounce

let scrollToTop = {
	appearAfter(offset) {
		console.log("hello");
		$(window).scroll(function() {
			if ($(this).scrollTop() >= offset) {        // If page is scrolled more than 100px
				$('.back-to-top').fadeIn(200);
			} else {
				$('.back-to-top').fadeOut(200);
			}
		});
	},

	clicked() {
		$('.back-to-top').click(function() {
			$('body,html').animate({
				scrollTop : 0
			}, 500);
		});
	},

	init() {
		scrollToTop.appearAfter(100);
		scrollToTop.clicked();
	}
}

scrollToTop.init();
