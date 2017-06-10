let dashboard = {
  init() {
    $('#documentType').on('change', function(e) {

      // i really don't like this
      var docType = $('.nice-select .current')[1].innerHTML.toLowerCase();

      

    });
  }
}

dashboard.init();
