let dashboard = {
  init() {
    $('#documentType').on('change', function(e) {
      var docType = $('.nice-select .current')[1].innerHTML.toLowerCase();
      console.log(docType);
      $('select').niceSelect('update');

    });

    $('#documentation-list').on('change', function(e) {
      var docName = $('.nice-select .current')[2].innerHTML.toLowerCase();
      console.log(docName);
      $('select').niceSelect('update');
    });

    $('#media-list').on('change', function(e) {
      var mediaName = $('.nice-select .current')[3].innerHTML.toLowerCase();
      console.log(mediaName);
      $('select').niceSelect('update');
    });

    $('.doc-toggle a').click(function(e) {
      $('.doc-toggle a').removeClass('active');
      $(this).addClass('active');
      $('#doc-upload-form .nice-select').toggle();
      $('#doc-upload-form input[name="documentName"]').toggle();
    });

    $('.media-toggle a').click(function(e) {
      $('.media-toggle a').removeClass('active');
      $(this).addClass('active');
      $('#media-upload-form .nice-select').toggle();
      $('#media-upload-form input[name="mediaName"]').toggle();
    });
  }

}

dashboard.init();
