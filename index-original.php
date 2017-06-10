<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Homepage</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div class="standard-page" id="app">
  		<?php include('./html-includes/navigation.html'); ?>
  		<hero>
        <section class="hero-container">
          <div class="hero-text">
            <h2 id="countdownTimer"></h2>
            <h1 id="hero-text">to the 20th SMU-RM Western Circuit 2017</h1>
          </div>
          <video loop muted autoplay class="fullscreen-bg__video">
            <source src="img/hero-video-2.mp4"/>
          </video>
        </section>
      </hero>
      <section id="intro">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="content align-center">
                <div class="text-wrapper">
                  <h2>About us</h2>
                  <p>
                    La preuve que le petit prince a existé c’est qu’il était ravissant, qu’il riait,
                    et qu’il voulait un mouton.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <!-- <img src="./img/carousel_img_4.jpg" /> -->
              <div class="block-img" id="intro-img"></div>
            </div>
          </div>
        </div>
      </section>
      <section id="gallery">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-sm-12">
              <div class="block-img" id="img-3"></div>
            </div>
            <div class="col-lg-3 col-sm-12">
              <div class="content align-center">
                <div class="text-wrapper">
                  <h2>Test</h2>
                  <p>La preuve que le petit prince a existé c’est qu’il était ravissant, qu’il riait,
                    et qu’il voulait un mouton.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12">
              <div class="block-img" id="img-3"></div>
            </div>
            <div class="col-lg-3 col-sm-12">
              <div class="content align-center">
                <div class="text-wrapper">
                  <h2>Test</h2>
                  <p>La preuve que le petit prince a existé c’est qu’il était ravissant, qu’il riait,
                    et qu’il voulait un mouton.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="intro">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="content align-center">
                <div class="text-wrapper">
                  <h2>Shorthanded?</h2>
                  <p>
                    Want to crew for a boat at the Western Circuit Sailing Regatta?
                    Or need more sailors onboard your boat? Simply email your name,
                    contact number, email and sailing experience
                    to <a href="sailing@sa.smu.edu.sg">sailing@sa.smu.edu.sg</a>
                    to advertise your wares on this page!
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-img" id="sec-img"></div>
            </div>
          </div>
        </div>
      </section>

  		<?php include('html-includes/footer.html'); ?>

	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
  </body>
</html>
