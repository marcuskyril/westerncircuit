var countdown = {
  init() {
  //   var countdownTimerWidth = 350;
  //   var cssMenuWidth = 1012;
  //   cssMenuWidth = $("#cssmenu").width();
  //   countdownTimerWidth = parseInt(cssMenuWidth * 27.47 / 100);
  //
  //   rightBarWidth = $(window).width() * 0.15;
  //   countdownTimerWidth = rightBarWidth;
  //
  //   countdownTimerWidth = $(".tdright").width();
  //   var countdownTimerHeight = countdownTimerWidth * 0.24;
  //   var myCountdown5 = new Countdown({
  //       year: 2016, // (optional) The target date's year
  //       month: 8, // (optional) The target date's month
  //       day: 15, // (optional) The target date's day
  //       width: countdownTimerWidth,
  //       height: countdownTimerHeight,
  //       rangeHi: "day",
  //       target: "countdownTimer",
  //       numbers: {
  //           font: "Arial",
  //           color: "#FFFFFF",
  //           bkgd: "black",
  //           rounded: 0.15,
  //           shadow: {
  //               x: 0,
  //               y: 3,
  //               s: 4,
  //               c: "#000000",
  //               a: 0.4
  //           }
  //       },
  //       labels: {
  //           font: "Arial",
  //           color: "black",
  //           weight: "normal" // <- no comma on last item!
  //       }
  //   });

    $("#countdownTimer")
    .countdown("2017/12/12", function(event) {
      $(this).text(
        event.strftime('%D DAYS %H HOURS %M MINS %S SECS')
      );
    });

  }
}

countdown.init();
