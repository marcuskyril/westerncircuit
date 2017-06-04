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

	  <div id="app">
	  <div class="standard-page" id="app">
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

            <form action="#" method="post" enctype="multipart/form-data">
        			<input type="file" name="files">
        			<input class="btn" type="submit">
        		</form>

            <p id="msg"></p>
          </section>
        </div>
      </main>
    <?php include('upload.php'); ?>
		<?php include('./html-includes/footer_new.html'); ?>
	  </div>
	  <script src="dist/app.js"></script>
    <!-- File Uploading client sideJS-->
    <script type="text/javascript">
      $('input[name="files"]').fileuploader(

      );
    </script>

  </body>
</html>
