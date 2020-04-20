<?php

	$dbServername = "localhost";	//server name of database
	$dbUsername = "root";			//user name for database
	$dbpassword = "";				//password for database
	$dbName = "orrs";				//database name 

	//creating connection
	$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbName);
	
	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());	//error in database connection
	}
	
?>