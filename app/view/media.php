<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Media</title>
	  <link rel="stylesheet" href="./assets/dist/app.css">
    <link rel='shortcut icon' type='image/x-icon' href="assets/img/favicon/favicon.ico">
  </head>
  <body>
	  <div class="standard-page" id="app">
  		<?php include('../app/view/html-includes/navigation.html'); ?>
      <section class="landing__banner-bar">
        <div class="container">
          <h1>Media</h1>
          <ol class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Media</a>
            </li>
          </ol>
        </div>
      </section>

      <section>
        <div class="standard-content">

          <ul class="tabs">
            <!-- <li class="active"><a href="#2017">2017</a></li> -->
            <li class="active"><a href="#2016">2016</a></li>
            <!-- <li><a href="#2016">2015</a></li> -->
          </ul>

          <?php
            // render_table("2017");
            render_table("2016");
          ?>

        </div>
      </section>

  		<?php include('../app/view/html-includes/footer.html'); ?>
	  </div>
	  <!-- Scripts -->
	  <script src="./assets/dist/app.js"></script>
  </body>
</html>

<?php
  function render_table($year) {
    $json_string = file_get_contents("./assets/media-list-config/media-list-".$year.".json");
    $json = json_decode($json_string, true);

    if($year === "2016") {
      echo '<div id="'.$year.'" class="tabs-content media-list active">';
    }  else {
      echo '<div id="'.$year.'" class="tabs-content media-list">';
    }

    echo '<table width="100%"><tbody>';
    echo '<tr><th>Result</th><th>Download</th></tr>';

    foreach ($json as $eventName => $resultList) {
      foreach($resultList['filePaths'] as $location) {
        $fileType = substr(strrchr($location,'.'),1);

        $iconArr = array(
                        "pdf" => "fa fa-file-pdf-o",
                        "doc" => "fa fa-file-word-o",
                        "docx" => "fa fa-file-word-o"
                      );

        echo '<tr><td>'.$eventName.'</td><td><a href="'.$location.'"><i class="'.$iconArr[$fileType].'"></i></a></td></tr>';

      }
    }

    echo '</tbody></table>';
    echo '</div>';

  }
?>
