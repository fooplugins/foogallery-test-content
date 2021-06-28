<?php 
	$folder = '/images/cats/'; //directory or folder to loop through
	$checkFiles = scandir($folder); //scan folder content
	$fileCount = count($checkFiles); //count number of files in the directory
	$i = 0; //set for iteration;
	while($i < $fileCount){
    	$file = $checkFiles[$i]; //each file is stored in an array ... 
      	if($file = '.' || $file = '..'){
        	//echo nothing
        }else{
          echo $file; // file names are printed out
        }
    }
?>