<?php
//-----------------------Step 1 make connection------------------------//
include __DIR__ .'/init.php';

try{
	mysqli_report(mysqli_report_error | mysqli_report_strict);
	
	if($conn = mysqli_connect(
	    $setting['db:config']['host'];
		$setting['db:config']['user'];
		$setting['db:config']['password'];
		$setting['db:config']['dbname'];
	
	){
		
	}else{
		throw new Exception();
	}catch(Exception $e){
		echo $e->getMessage();
		exit('DB Connection Failed '.mysqli_connect_error());
	}
		
	
		
     
?>