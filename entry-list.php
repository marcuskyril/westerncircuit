<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Entry List</title>
	  <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
	  <div class="standard-page" id="app">
  		<?php include('html-includes/navigation.html'); ?>
      <section class="landing__banner-bar">
        <div class="container">
          <h1>Entry List</h1>
          <ol class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Entry List</a>
            </li>
          </ol>
        </div>
      </section>

      <section>
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

          $json_string = file_get_contents("./assets/entry-list.json");
          $json = json_decode($json_string, true);
          foreach ($json as $class => $entries) {
            echo '<div class="entry">';
            echo '<h2>'.$class.'</h2>';
            echo '<table width="100%"><tbody>';
            echo '<tr><th>Sail ID</th><th>Yacht Name</th><th>Skipper Name</th></tr>';
            foreach ($entries as $entry) {
              echo '<tr><td>'.$entry['sailID'].'</td><td>'.$entry['yachtName'].'</td><td>'.$entry['skipperName'].'</td></tr>';
            }
            echo '</tbody></table>';
            echo '</div>';
          }
          ?>
        </div>
      </section>

  		<?php include('html-includes/footer_new.html'); ?>
	  </div>
	  <!-- Scripts -->
	  <script src="dist/app.js"></script>
  </body>
</html>
