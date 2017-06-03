var countdown = {
  init() {
    $("#countdownTimer")
    .countdown("2017/12/12", function(event) {
      $(this).text(
        event.strftime('%D DAYS %H HOURS %M MINS %S SECS')
      );
    });

  }
}

countdown.init();
