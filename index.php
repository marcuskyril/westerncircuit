<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Homepage</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div id="app">

  		<?php include('html-includes/navigation.html'); ?>

  		<!-- Hero -->
      <section class="hero carousel">
        <div class="carousel__item" style="background-image: url(img/carousel_img_1.jpg);">
          <div class="hero__speech">
            <div class="category">
              <i class="fa fa-tag" aria-hidden="true"></i>Featured news
            </div>
            <h1 class="hero__speech-title">13th, 14th, 20th August 2016</h1>
            <p>
              Jointly organized by Singapore Management University and Raffles Marina
            </p>
            <a href="javascript:void(0);" class="btn"><i class="fa fa-facebook-square" aria-hidden="true"></i>WCSR</a>
          </div>
        </div>

        <div class="carousel__item" style="background-image: url(img/carousel_img_3.jpg);">
          <div class="hero__speech">
            <div class="category">
              <i class="fa fa-tag" aria-hidden="true"></i>Featured news
            </div>
            <h1 class="hero__speech-title">
              Sign Up Information
            </h1>
            <a href="javascript:void(0);" class="btn">Click here<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="carousel__item" style="background-image: url(img/carousel_img_4.jpg);">
          <div class="hero__speech">
            <div class="category">
              <i class="fa fa-tag" aria-hidden="true"></i>Featured News
            </div>
            <h1 class="hero__speech-title">SMU Sailing</h1>
            <p>
              Want to know more about us? Visit our Facebook page!
            </p>
            <a href="javascript:void(0);" class="btn"><i class="fa fa-facebook-square" aria-hidden="true"></i>SMU Sailing</a>
          </div>
        </div>
      </section>

      <!-- <section class="countdown">
        <div class="container align-center">
          <h4>Counting down to the 19th SMU-RM<br/>
            <span style="color: #fff;">Western Circuit Sailing Regatta!</span>
          </h4>
          <div id="countdownTimer"></div>
        </div>
        
      </section> -->
          
<!--      delete this comment-->

  		<?php include('html-includes/footer.html'); ?>

	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
  </body>
</html>
