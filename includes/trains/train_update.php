<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];
		$tname 	= $_POST['tname'];
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $runningDays 	= $_POST['runningDays'];
    $distance   = $_POST['distance'];
    $ticketPrice = $_POST['ticketPrice'];
// echo $tnumber." ".$tname." ".$source." ".$destination." ".$runningDays;

		// different sql statements depending on different cases
		// && !empty($source) && !empty($destination)
		if (!empty($tnumber) && !empty($tname) && !empty($source) && !empty($destination) && !empty($runningDays) && $source!=$destination && is_numeric($tnumber) && strlen($tnumber)==5 && preg_match("/^[a-zA-Z\s]+$/", $tname) && strlen($tname)<=50 && preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50 && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50  && preg_match("/^[0-1]+$/", $runningDays) && strlen($runningDays)==8) {
				$sql = " UPDATE  train SET source_st = ? , destination_st = ?, running_days= ? WHERE train_no = ?" ;
		}
		else {
			 echo "if condition error";
			exit();
		}



		// if (!empty($tnumber) && !empty($tname) && !empty($runningDays) &&  $source!=$destination && is_numeric($tnumber) && strlen($tnumber)==5 && preg_match("/^[a-zA-Z\s]+$/", $tname) && strlen($tname)<=50 && preg_match("/^[0-1]+$/", $runningDays) && strlen($runningDays)==8) {
		// 	//check for source and destination
		// 	//preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50 && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50  &&
		// 	if (!empty($source) && !empty($destination) && preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50 && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50) {
		// 		$sql = " UPDATE  train SET source_st = ? , destination_st = ?, running_days= ? WHERE train_no = ?" ;
		// 	}
		// 	elseif (!empty($source) && preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50) {
		// 			$sql = " UPDATE  train SET source_st = ? , running_days= ? WHERE train_no = ?" ;
		// 	}
		// 	elseif (!empty($destination) && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50) {
		// 		$sql = " UPDATE  train SET  destination_st = ?, running_days= ? WHERE train_no = ?" ;
		// 	}
		// 	else {
		// 		exit();
		// 	}
    // }
    // else {
    //   // echo "emptyfields";
    //   exit();
    // }





			// creating connection
			$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error";
				exit();
			}
			else{
				//execute sql
					mysqli_stmt_bind_param($stmt,"ssii",$source,$destination,$runningDays,$tnumber);
					mysqli_stmt_execute($stmt);
		}

?>
