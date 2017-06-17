<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>404</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div class="standard-page" id="app">
  		<?php include('./html-includes/navigation.html'); ?>
          
        
        <section class="hero-container">

            
        <!-- particles-->
        <div id="particles"></div>
            
        <div class="error-text">
            <div class="error">
                <div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
                <h3 class="font-bold">We couldn't find the page..</h3>

                <div class="error-desc">
                    Sorry, but the page you are looking for was either not found or does not exist. <br/>
                    Try refreshing the page or click the button below to go back to the Homepage.
                    <div>
                        <a href="./index.php">
                                <i class="fa fa-arrow-left"></i>
                                Go back to Homepage                      
                        </a>
                    </div>
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
