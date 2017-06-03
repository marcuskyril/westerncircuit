let menuControl = {
	init() {

		$('#close-overlay').on('click', function(e) {
			e.preventDefault();
			$('#header').removeClass("scrolled-100vh");
			$('#overlay').removeClass('menu-overlay');
			$('#nav-icon4').removeClass('open');
		});

	  $('#nav-icon4').click(function(){
			$('#header').addClass("scrolled-100vh");
			$(this).toggleClass('open');
			$('#overlay').toggleClass('menu-overlay');
		});
	}
}

menuControl.init();
