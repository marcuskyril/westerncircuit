<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Gallery</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div id="app">
  		<?php include('html-includes/navigation.html'); ?>
      <section class="landing__banner-bar">
        <div class="container">
          <h1>Gallery</h1>
          <ol class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="gallery.php">Gallery</a>
            </li>
          </ol>
        </div>
      </section>

      <section>
        <div class="standard-content">
            <!-- gallery links here-->
            
            <div class="list-group">
              <a href="gallery/gallery_race_1_howie.php" class="list-group-item list-group-item-action">Race Day 1 - Photos by Howie Choo (Saturday, 13th August 2016)</a>
              <a href="gallery/gallery_race_1_spencer.php" class="list-group-item list-group-item-action">Race Day 1 - Photos by Spencer (Saturday, 13th August 2016)</a>
              <a href="#" class="list-group-item list-group-item-action">Race Day 1 - Photos by Victor Lim (Saturday, 13th August 2016)</a>
              <a href="#" class="list-group-item list-group-item-action">Race Day 1 - Photos by Stanley Chee (Saturday, 13th August 2016)</a>
            </div>
            
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Race Day 2 - Photos by Howie Choo (Sunday, 14th August 2016) </a>
                <a href="#" class="list-group-item list-group-item-action">Race Day 2 - Photos by Victor Lim (Sunday, 14th August 2016) </a>
                <a href="#" class="list-group-item list-group-item-action">Race Day 2 - Photos by Stanley Chee (Sunday, 14th August 2016)</a>
                <a href="#" class="list-group-item list-group-item-action">Race Day 2 - Photos by William Ong (Sunday, 14th August 2016) </a>
            </div>
            
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Race Day 3 - Photos by Howie Choo (Saturday, 20th August 2016)</a>
                <a href="#" class="list-group-item list-group-item-action">Race Day 3 - Photos by Spencer (Saturday, 20th August 2016)</a>
            </div>
        </div>
        
      </section>

  		<?php include('html-includes/footer.html'); ?>
	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
  </body>
</html>
