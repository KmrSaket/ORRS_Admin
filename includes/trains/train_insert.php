<?php


		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];
		$tname 	= $_POST['tname'];
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $runningDays 	= $_POST['runningDays'];


    if (!empty($tnumber) && !empty($tname) && !empty($source) && !empty($destination) && !empty($runningDays) && $source!=$destination && is_numeric($tnumber) && strlen($tnumber)==5 && $tnumber[0]!=0 && preg_match("/^[a-zA-Z\s]+$/", $tname) && strlen($tname)<=50 && preg_match("/^[a-zA-Z\s]+$/", $source) && strlen($source)<=50 && preg_match("/^[a-zA-Z\s]+$/", $destination) && strlen($destination)<=50  && preg_match("/^[0-1]+$/", $runningDays) && strlen($runningDays)==8) {
        $sql = " INSERT INTO train (train_no, train_name, source_st, destination_st, running_days) VALUES (?,?,?,?,?) " ;
    }
    else {
      echo "Please Check the fields and Try again!";
      exit();
    }




			// creating connection
			$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error in database connection";
				exit();
			}
			else{
				//execute sql
        // echo "success";
					mysqli_stmt_bind_param($stmt,"isssi",$tnumber,$tname,$source,$destination,$runningDays);
		 		 	if (mysqli_stmt_execute($stmt)) {
		 		 		echo "Train inserted Successfully!";
		 		 	}
					else {
						echo "Train Number already exist!";
					}

			 	}

?>
