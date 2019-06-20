<?php 

	$servername="localhost";
	$username="root";
	$password="1234567";

	try{
		$conn = new PDO("mysql:host=$servername;dbname=alumni",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
	}catch(Exception $e){
		echo $e->getMessage();

	}



 ?>