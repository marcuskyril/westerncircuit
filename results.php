<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Results</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div class="standard-page" id="app">
  		<?php include('./html-includes/navigation.html'); ?>
      <section class="landing__banner-bar">
        <div class="container">
          <h1>Results</h1>
          <ol class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Results</a>
            </li>
          </ol>
        </div>
      </section>

      <main>
        <div class="standard-content">
          <?php

          // $json_string = file_get_contents("./assets/entry-list.json");
          // $json = json_decode($json_string, true);
          //
          // $sailID = 'Sail 123';
          // $skipperName = 'John Mayer';
          // $yachtName = 'Search For Everything';
          //
          // $test = array('sailID' => $sailID, 'yachtName' => $yachtName, 'skipperName' => $skipperName);
          // array_push($json['irc A'], $test);
          // $edited_json = json_encode($json);
          // file_put_contents('./assets/entry-list.json', $edited_json);

          $json_string = file_get_contents("./assets/results.json");
          $json = json_decode($json_string, true);
          foreach ($json as $year => $results) {
            echo '<div class="entry">';
            echo '<h2>'.$year.'</h2>';
            echo '<table width="100%"><tbody>';
            echo '<tr><th>Category</th><th>Results</th></tr>';

            foreach($results as $key => $resultList) {
              $category = $resultList['category'];
              $results = $resultList['results'];
              echo '<tr><th colspan="2">'.$category.'</th></tr>';
              foreach($results as $result) {
                $name =  $result['name'];
                $location = $result['location'];
                $fileType = substr(strrchr($location,'.'),1);

                $iconArr = array(
                                "pdf" => "fa fa-file-pdf-o",
                                "doc" => "fa fa-file-word-o",
                                "docx" => "fa fa-file-word-o"
                              );

                echo '<tr><td>'.$name.'</td><td><a href="'.$location.'"><i class="'.$iconArr[$fileType].'"></i></a></td></tr>';

              }

            }

            echo '</tbody></table>';
            echo '</div>';
          }
          ?>
        </div>
      </main>

  		<?php include('html-includes/footer_new.html'); ?>?>
	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
  </body>
</html>
