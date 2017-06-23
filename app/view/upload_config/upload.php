<?php
  // include('class.fileuploader.php');
  $currentYear = '2017';
  $documentName = '';
  $uploadType = '';

  // get POST inputs
  if((isset($_POST['uploadType']) && isset ($_POST['documentName']))){
    // for media/documentation
    $uploadType = $_POST['uploadType'];
    $documentName = $_POST['documentName'];
    $fileName = $_POST['fileuploader-list-files'];
    $ext = substr(pathinfo($fileName, PATHINFO_EXTENSION), 0, -2);

    if($uploadType === 'media') {
      // media
      $path = "./assets/media-list.json";
      $media_list_string = file_get_contents($path);
      $media_list_json = json_decode($media_list_string, true);
      $mediaName = $documentName;
      $documentName = str_replace(" ", "_", $documentName);
      $arr = array('./assets/media/'.$documentName.'.'.$ext);
      $media_details = array('filePaths' => $arr);
      $toEncode = array($mediaName => $media_details);

      if(!empty($media_list_json)) {
        // class/category does not exist in result list
        if(!isset($media_list_json[$mediaName])) {
          $edited_json = array_merge($media_list_json, $toEncode);
          file_put_contents($path, json_encode($edited_json));
        } else {
          // add entry to existing class/category
          array_push($media_list_json[$mediaName]['filePaths'], './assets/media/'.$documentName.'.'.$ext);
          file_put_contents($path, json_encode($media_list_json));
        }
      } else {
        file_put_contents($path, json_encode($toEncode));
      }

    } else {
      // documentation
      $path = "./assets/documentation-list.json";
      $documentation_list_string = file_get_contents($path);
      $documentation_list_json = json_decode($documentation_list_string, true);
      $docName = $documentName;
      $documentName = str_replace(" ", "_", $documentName);
      $arr = array('./assets/documentation/'.$documentName.'.'.$ext);
      $document_details = array('filePaths' => $arr);
      $toEncode = array($docName => $document_details);

      if(!empty($documentation_list_json)) {
        // class/category does not exist in result list
        if(!isset($documentation_list_json[$docName])) {
          $edited_json = array_merge($documentation_list_json, $toEncode);
          file_put_contents($path, json_encode($edited_json));
        } else {
          // add entry to existing class/category
          array_push($documentation_list_json[$docName]['filePaths'], './assets/documentation/'.$documentName.'.'.$ext);
          file_put_contents($path, json_encode($documentation_list_json));
        }
      } else {
        file_put_contents($path, json_encode($toEncode));
      }

    }

  } else if((isset($_POST['documentName']) && isset($_POST['class']))) {
    // for results
    $uploadType = "results";
    $className = $_POST['class'];
    $documentName = $_POST['documentName'];
    $eventName = $documentName;
    $fileName = $_POST['fileuploader-list-files'];
    $ext = substr(pathinfo($fileName, PATHINFO_EXTENSION), 0, -2);

    // replace all spaces with _
    $documentName = str_replace(" ", "_", $documentName);

    // write to json (for results only)
    $path = "./assets/results-config/result-list-".$currentYear.".json";
    $result_list_string = file_get_contents($path);
    $result_list_json = json_decode($result_list_string, true);
    $result_details = array(array('name' => $eventName, 'location' => './assets/results/results_'.$currentYear.'/'.$documentName.'.'.$ext));
    $toEncode = array($className => $result_details);

    if(!empty($result_list_json)) {
      // class/category does not exist in result list
      if(!isset($result_list_json[$className])) {
        $edited_json = array_merge($result_list_json, array($className => $result_details));
        file_put_contents($path, json_encode($edited_json));
      } else {
        // add entry to existing class/category
        array_push($result_list_json[$className], array('name' => $eventName, 'location' => './assets/results/results_'.$currentYear.'/'.$documentName.'.pdf'));
        file_put_contents($path, json_encode($result_list_json));
      }
    } else {
      file_put_contents($path, json_encode($toEncode));
    }
  }

  // route the file to the correct location
  $uploadDirArr = array(
                  "media" => "./assets/media/",
                  "documentation" => "./assets/documentation/",
                  "results" => "./assets/results/results_".$currentYear."/"
                );

  if(isset($uploadDirArr[$uploadType])) {
    $uploadDir = $uploadDirArr[$uploadType];
  } else {
    $uploadDir = '';
  }

	// initialize FileUploader
  $FileUploader = new FileUploader('files', array(
    'limit' => 1,
    'maxSize' => null,
    'fileMaxSize' => null,
    'extensions' => ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'],
    'required' => false,
    'uploadDir' => $uploadDir,
    'title' => $documentName,
    'replace' => true,
    'listInput' => true,
    'files' => null
  ));

	// call to upload the files
  $data = $FileUploader->upload();
	if($data['hasWarnings']) {
    $warnings = $data['warnings'];

 		echo '<pre>';
    print_r($warnings);
		echo '</pre>';
  }

	if($data['isSuccess'] && count($data['files']) > 0) {
		$file = $data['files'][0]['file'];
		$filename = $data['files'][0]['name'];
    echo '<p class="success-message">Covfefe. '.$filename.' successfully added!</p>';
	}
