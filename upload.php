<?php
    include('class.fileuploader.php');
	header("location:dashboard.php");    

    // initialize the FileUploader
    $FileUploader = new FileUploader('files', array(
        
    // Options will go here
        
	// limit of files {null, Number}
	// also with the appended files
	// if null - has no limits
	// example: 3
	'limit' => 1,
	
	// file's maximal size in MB {null, Number}
	// also with the appended files
	// if null - has no limits
	// example: 2
	'maxSize' => 10,
	
	// each file's maximal size in MB {null, Number}
	// if null - has no limits
	// example: 2
	'fileMaxSize' => 5,
	
	// allowed extensions or file types {null, Array}
	// if null - has no limits
	// example: ['jpg', 'jpeg', 'png', 'audio/mp3', 'text/plain']
	'extensions' => null,
	
	// check if file input exists ($_FILES[ file_input_name ]) {Boolean}
	// check if files were choosed (minimum 1 file should be choosed)
	'required' => false,
	
	// upload directory {String}
	// note that main directory is the directory where you are initializing the FileUploader class
	// example: '../uploads/'
	'uploadDir' => './assets/results/',
	
	// file title {String, Array}
	// example: 'name' - original file name
	// example: 'auto' - random text from 12 letters
	// example: 'my_custom_filename' - custom file name
	// example: 'my_custom_filename_{random}' - my_custom_filename_(+ random text from 12 letters)
	// '{random} {file_name} {file_size} {timestamp} {date} {extension}' - variables that can be used to generate a new file name
	// example: array('auto', 24) - [0] is a string as in the examples above, [1] is the length of the random string
	'title' => 'name',
	
	// replace the file with the same name? {Boolean}
	// if it will be false - will automatically generate a new file name with (1,2,3...) at the end of the file name
	'replace' => false,
	
	// input with the listed files {Boolean, String}
	// this list is an input[type="hidden"]
	// this list is important to check which files shouldn't be uploaded or need to be removed
	// example: true
	// example: 'custom_listInput_name'
	'listInput' => true,
	
	// appended files {null, Array with arrays}
	// it is important to declare them if you want to check the right limit and maxSize options; by appended files; by generating an input
	// please follow this structure for each file:
//	array(
//		"name" => 'name',
//		"type" => FileUploader::mime_content_type('uploads/filename1.txt'),
//		"size" => filesize('uploads/filename1.txt'),
//		"file" => 'uploads/filename1.txt',
//		"data" => array(
//			"url" => 'http://localhost/example/uploads/filename1.txt',
//			"another_attribute" => "ok"
//		    )
//	     )
//	'files' => null
    )
    );
	
    // call to upload the files
    $upload = $FileUploader->upload();
	
    if($upload['isSuccess']) {
        // get the uploaded files
        $files = $upload['files'];
        echo "mother".$files ;
          
    }
    if($upload['hasWarnings']) {
        // get the warnings
        $warnings = $upload['warnings'];
    };



?>