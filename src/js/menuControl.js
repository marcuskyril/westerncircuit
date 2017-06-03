let menuControl = {
	init() {

		$('#close-overlay').on('click', function(e) {
			e.preventDefault();
			$('#header').css('background', 'transparent');
			$('#overlay').removeClass('menu-overlay');
			$('#nav-icon4').removeClass('open');
		});

	  $('#nav-icon4').click(function(){
			$('#header').css('background', '#fff');
			$(this).toggleClass('open');
			$('#overlay').toggleClass('menu-overlay');
		});
	}
}

menuControl.init();
