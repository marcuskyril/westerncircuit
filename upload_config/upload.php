<?php
  include('class.fileuploader.php');

  $documentName = '';
  $uploadType = '';

  // get POST inputs
  if(isset($_POST['uploadType']) && isset ($_POST['documentName'])){
    $uploadType = $_POST['uploadType'];
    $documentName = $_POST['documentName'];
  }

  // write to json file

  // if($uploadType == 'documentation') {
  //
  // }

  // replace all spaces with _
  $documentName = str_replace(" ", "_", $documentName);

  // route the file to the correct location
  $uploadDirArr = array(
                  "media" => "./assets/media/",
                  "documentation" => "./assets/documentation/",
                  "results" => "./assets/results/"
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

		// echo our form data
		// echo '<h1>Your form data:</h1>';
		// echo 'type: ' . $uploadType . '<br>';
		// echo 'file name: ' . $filename . '<br>';
    echo '<p class="success-message">Covfefe. '.$filename.' successfully added!</p>';
	}
