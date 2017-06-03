<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Dashboard</title>
	  <link rel="stylesheet" href="dist/app.css">
      <link href="src/scss/libraries/jquery.fileuploader.scss" media="all" rel="stylesheet">
  </head>
  <body>
    <?php
      // do some fancy password protect shit
      // firebase..?
    ?>
<<<<<<< HEAD
    
      
      
	  <div id="app">
=======
	  <div class="standard-page" id="app">
>>>>>>> 43465b135053db5d5b9ec73a0d199db8c7503304
  		<?php include('html-includes/navigation.html'); ?>
      <section class="landing__banner-bar">
        <div class="container">
          <h1>Dashboard</h1>
          <ol class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Dashboard</a>
            </li>
          </ol>
        </div>
      </section>

      <main>
        <div class="standard-content">
          <section>
            <h2>Create Class</h2>
    				<form id="classForm" action="get">
              <input type="text" placeholder="Class" name="class" />
              <a href="#" class="btn">Submit</a>
              <div id="createClassResult"></div>
            </form>
          </section>
          <section>
            <h2>Create Entry</h2>
    				<form id="entryForm" action="get">
              <select>
                <option name="default" value="">Select...</option>
                <option name="class1" value="class1">Class 1</option>
              </select>
              <input type="text" placeholder="Sail ID" name="sailID"/>
              <input type="text" placeholder="Yacht Name" name="yachtName"/>
              <input type="text" placeholder="Skipper Name" name="skipperName" />
              <a href="#" class="btn">Submit</a>
              <div id="createEntryResult"></div>
            </form>
          </section>
          <section>
            <h2>Upload File</h2>
            <form id="uploadForm" action="POST">
              <!-- find syntax for file upload -->
              <select>
                <option name="default" value="">Select...</option>
                <option name="media" value="media">Media</option>
                <option name="results" value="results">Results</option>
                <option name="documentation" value="documentation">Documentation</option>
              </select>
              <a href="#" class="btn">Submit</a>
              <div id="uploadResult"></div>
            </form>
            <div class="fileuploader fileuploader-theme-dragdrop">
                <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="files">
                    <input type="submit" class="btn">
                </form>
            </div>
              
            <p id="msg"></p>  
          </section>
        </div>
      </main>

<<<<<<< HEAD
  		<?php include('html-includes/footer.html'); ?>
        
        
=======
  		<?php include('html-includes/footer_new.html');
>>>>>>> 43465b135053db5d5b9ec73a0d199db8c7503304
	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
      <script src="/src/js/jquery.fileuploader.min.js" type="text/javascript"></script>
      <!-- File Uploading client sideJS-->
      <script type="text/javascript">
        $('input[name="files"]').fileuploader({
            	// enable thumbnails for files {null, Object}
	// set on null to disable the thumbnails
	thumbnails: {
		// thumbnails list HTML {String, Function}
		// example: '<ul></ul>'
		// example: function(options) { return '<ul></ul>'; }
		box: '<div class="fileuploader-items">' +
			  '<ul class="fileuploader-items-list"></ul>' +
		      '</div>',
		
		// append thumbnails list to selector {null, String, jQuery Object}
		// example: 'body'
		// example: $('body')
		boxAppendTo: null,
		
		// thumbnails item HTML {String, Function}
		// example: '<li>${name}</li>'
		// example: function(item) { return '<li>' + item.name + '</li>'; }
		item: '<li class="fileuploader-item">' +
			   '<div class="columns">' +
			   	'<div class="column-thumbnail">${image}</div>' +
				'<div class="column-title">' +
				     '<div title="${name}">${name}</div>' +
				     '<span>${size2}</span>' +
				'</div>' +
				'<div class="column-actions">' +
				     '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
				'</div>' +
			    '</div>' +
			    '<div class="progress-bar2">${progressBar}<span></span></div>' +
			'</li>',
		
		// thumbnails appended item HTML {String, Function}
		// example: '<li>${name}</li>'
		// example: function(item) { return '<li>' + item.name + '</li>'; }
		item2: '<li class="fileuploader-item">' +
			   '<div class="columns">' +
			   	'<a href="${data.url}" target="_blank">' +
				     '<div class="column-thumbnail">${image}</div>' +
				     '<div class="column-title">' +
				          '<div title="${name}">${name}</div>' +
				          '<span>${size2}</span>' +
				     '</div>' +
				'</a>' +
				'<div class="column-actions">' +
				     '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="Download" download><i></i></a>' +
				     '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
				'</div>' +
			    '</div>' +
			'</li>',
			
		// insert the thumbnail's item at the beginning of the list? {Boolean}
		itemPrepend: false,
		
		// show a confirmation dialog by removing a file? {Boolean}
		// it will not be shown in upload mode by canceling an upload
		removeConfirmation: true,
		
		// render the image thumbnail? {Boolean}
		// if it will be false, it will generate an icon(you can also hide it with css)
		// if it will be false, you can use the API method (item.renderImage()) to render it (check thumbnails example)
		startImageRenderer: true,
		
		// render the images synchron {Boolean}
		// made to improve the browser speed
		synchronImages: true,
		
		// render the image in a canvas element {Boolea, Object}
		// if it will be true, it will generate an image with the css sizes from the parent element (.column-thumbnail)
		// you can also set the width and the height in the object
		// by default - true
		canvasImage: {
			width: null,
			height: null
		},
		
		// thumbnails selectors
		_selectors: {
			list: '.fileuploader-items-list',
			item: '.fileuploader-item',
			start: '.fileuploader-action-start',
			retry: '.fileuploader-action-retry',
			remove: '.fileuploader-action-remove'
		},
		
		// Callback fired before adding the list element
		beforeShow: function(parentEl, newInputEl, inputEl) {
			// callback will go here
		},
		
		// Callback fired after adding the item element
		onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
			// callback will go here
		},
		
		// Callback fired after removing the item element
		// by default we will animate the removing action
		onItemRemove: function(itemEl, listEl, parentEl, newInputEl, inputEl) {
			itemEl.children().animate({'opacity': 0}, 200, function() {
				setTimeout(function() {
					itemEl.slideUp(200, function() {
						itemEl.remove(); 
					});
				}, 100);
			});
		},
		
		// Callback fired after the item image was loaded
		onImageLoaded: function(itemEl, listEl, parentEl, newInputEl, inputEl) {
			// callback will go here
		},
	},
    
   
            
    
    // enable the drag&drop feature {Boolean, Object}
	// this feature is available only in upload mode
	// by default - true
	dragDrop: {
		// set drag&drop container {null, String, jQuery Object}
		// example: 'body'
		// example: $('body')
		container: null,
		
		// Callback fired on entering with dragged files the drop container
		onDragEnter: function(event, listEl, parentEl, newInputEl, inputEl) {
			// callback will go here
            console.log("callback", event);
		},
		
		// Callback fired on leaving with dragged files the drop container
		onDragLeave: function(event, listEl, parentEl, newInputEl, inputEl) {
			// callback will go here
		},
		
		// Callback fired on dropping the dragged files in drop container
		onDrop: function(event, listEl, parentEl, newInputEl, inputEl) {
			// callback will go here
		},

	},

        });
      </script>
        
  </body>
</html>
