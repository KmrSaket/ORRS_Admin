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


		// different sql statements depending on different cases
		if (!empty($source)) {
			if (!empty($destination) ) {
				if (!empty($runningDays) ) {
					$sql = "UPDATE train SET source_st = ? , destination_st = ? , running_days = ? WHERE train_no = ?";
				}
				else {
					$sql = "UPDATE train SET source_st = ? , destination_st = ?  WHERE train_no = ?";
				}
			}
			else {
				if (!empty($runningDays) ) {
					$sql = "UPDATE train SET source_st = ? , running_days = ? WHERE train_no = ?";
				}
				else {
					$sql = "UPDATE train SET source_st = ?  WHERE train_no = ?";
				}
			}

	 	}
		else {
			if (!empty($destination) ) {
				if (!empty($runningDays) ) {
					$sql = "UPDATE train SET  destination_st = ? , running_days = ? WHERE train_no = ?";
				}
				else {
					$sql = "UPDATE train SET  destination_st = ?  WHERE train_no = ?";
				}
			}
			else {
				if (!empty($runningDays) ) {
					$sql = "UPDATE train SET running_days = ? WHERE train_no = ?";
				}
				else {
					echo "nothing updated";
					exit();
				}
			}
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

			 if (!empty($source)) {
			 	if (!empty($destination) ) {
			 		if (!empty($runningDays) ) {
						mysqli_stmt_bind_param($stmt,"ssii",$source,$destination,$runningDays,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 		else {
						mysqli_stmt_bind_param($stmt,"ssi",$source,$destination,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 	}
			 	else {
			 		if (!empty($runningDays) ) {
						mysqli_stmt_bind_param($stmt,"sii",$source,$runningDays,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 		else {
						mysqli_stmt_bind_param($stmt,"si",$source,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 	}

			 }
			 else {
			 	if (!empty($destination) ) {
			 		if (!empty($runningDays) ) {
						mysqli_stmt_bind_param($stmt,"sii",$destination,$runningDays,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 		else {
						mysqli_stmt_bind_param($stmt,"ssii",$destination,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 	}
			 	else {
			 		if (!empty($runningDays) ) {
						mysqli_stmt_bind_param($stmt,"ssii",$runningDays,$tnumber);
		 		 	 mysqli_stmt_execute($stmt);
			 		}
			 	}
			 }
		}

?>
