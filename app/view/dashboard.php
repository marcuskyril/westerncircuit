<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Dashboard</title>
	  <link rel="stylesheet" href="./assets/dist/app.css">
  </head>
  <body>
    <?php

      // read json files
      $class_list_string = file_get_contents("./assets/class-list.json");
      $entry_list_string = file_get_contents("./assets/entry-list-2017.json");

      // function to format strings to camel case
      function camelCase($str, array $noStrip = []) {
        // non-alpha and non-numeric characters and apostrophes become spaces
        $str = str_replace("'", "", $str);
        $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
        $str = trim($str);
        // uppercase the first character of each word
        $str = ucwords($str);

        $str = str_replace(" ", "", $str);
        $str = lcfirst($str);

        return $str;
      }
    ?>

	  <div class="standard-page" id="app">
  		<?php include('../app/view/html-includes/navigation.html'); ?>
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
            <h2>Create Category</h2>
    				<form id="classForm" action="#" method="get" >
              <div class="input-group">
                <input type="text" placeholder="Class" name="class" />
                <button class="btn" type="submit">Submit</button>
              </div>
              <div id="createClassResult"></div>
            </form>
          </section>

          <?php
            $json = json_decode($class_list_string, true);
            if(isset($_GET['class'])) {
              $className = $_GET['class'];
              $obj = array('name' => $className);

              if(!empty($json)) {
                array_push($json, $obj);
                $edited_json = json_encode($json);
              } else {
                $edited_json = json_encode(array($obj));
              }

              file_put_contents('./assets/class-list.json', $edited_json);
              echo '<p class="success-message">Covfefe. '.$className.' successfully added!</p>';
            }
          ?>

          <hr />
          <section>
            <h2>Create Entry</h2>

    				<form id="entryForm" action="#" method="post">
              <div class="input-group">
                <select name="class">
                  <option name="default" value="">Select class</option>
                  <?php
                    // $json_string = file_get_contents("./assets/class-list.json");
                    $json = json_decode($class_list_string, true);

                    foreach($json as $key => $value) {
                      echo '<option value="'.$value['name'].'">'.$value['name'].'</option>';
                    }
                  ?>
                </select>
                <input type="text" placeholder="Sail ID" name="sailID" required />
                <input type="text" placeholder="Yacht Name" name="yachtName" required />
                <input type="text" placeholder="Skipper Name" name="skipperName" required />
                <button class="btn" type="submit">Submit</button>
              </div>
              <div id="createEntryResult"></div>
            </form>
          </section>

          <?php
            $entry_list_json = json_decode($entry_list_string, true);
            $path = './assets/entry-list-2017.json';

            if(isset($_POST['sailID']) && isset($_POST['yachtName']) && isset($_POST['skipperName'])) {
              $className = $_POST['class'];
              $sailID = $_POST['sailID'];
              $yachtName = $_POST['yachtName'];
              $skipperName = $_POST['skipperName'];

              $entry_details = array(array('sailID' => $sailID, 'yachtName' => $yachtName, 'skipperName' => $skipperName));
              $toEncode = array($className => $entry_details);
              //
              if(!empty($entry_list_json)) {
                // class/category does not exist in entry list
                if(!isset($entry_list_json[$className])) {
                  $edited_json = array_merge($entry_list_json, array($className => $entry_details));
                  file_put_contents($path, json_encode($edited_json));
                } else {
                  // add entry to existing class/category
                  array_push($entry_list_json[$className], array('sailID' => $sailID, 'yachtName' => $yachtName, 'skipperName' => $skipperName));
                  file_put_contents($path, json_encode($entry_list_json));
                }
              } else {
                echo "empty";
                file_put_contents($path, json_encode($toEncode));
              }

              echo '<p class="success-message">Covfefe. Entry successfully added!</p>';
            }
          ?>

          <hr />
          <section>
            <h2>Upload File</h2>

            <form action="#" method="post" enctype="multipart/form-data">
              <div class="input-group">
                <input type="text" name="documentName" placeholder="Document name" required />
                <select name="uploadType" id="documentType" required>
                  <option value="">Select document type</option>
                  <option value="media">Media</option>
                  <option value="results">Results</option>
                  <option value="documentation">Documentation</option>
                </select>
          			<input type="file" name="files[]" required>
                <button class="btn" type="submit">Submit</button>
              </div>
        		</form>
            <?php include('../app/view/upload_config/upload.php'); ?>
          </section>

          <hr />
          <section>
            <div class="input-group">
              <button id="logout" class="btn">Logout</button>
            </div>
          </section

        </div>
      </main>

		  <?php include('../app/view/html-includes/footer.html'); ?>
	  </div>
	  <script src="./assets/dist/app.js"></script>
    <?php include('../app/view/html-includes/auth.html'); ?>

  </body>
</html>
