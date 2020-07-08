<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];
		$tname 	= $_POST['tname'];
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $runningDays 	= $_POST['runningDays'];


		if (!empty($tnumber) && !empty($tname) && !empty($source) && !empty($destination) && !empty($runningDays) && $source!=$destination && is_numeric($tnumber) && strlen($tnumber)==5 && preg_match("/^[a-zA-Z\s]+$/", $tname) && strlen($tname)<=50 && preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50 && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50  && preg_match("/^[0-1]+$/", $runningDays) && strlen($runningDays)==8) {
				$sql = " UPDATE  train SET source_st = ? , destination_st = ?, running_days= ? WHERE train_no = ?" ;
		}
		else {
			 echo "Please Check the fields and Try again!";
			exit();
		}

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
					if (mysqli_stmt_execute($stmt)) {
						echo "Train Updated Successfully!";
					}
		}

?>
