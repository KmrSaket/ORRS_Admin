<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];
		$tname 	= $_POST['tname'];
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $runningDays 	= $_POST['runningDays'];

    if (!empty($tnumber) && !empty($tname) && !empty($source) && !empty($destination) && !empty($runningDays)) {
        $sql="INSERT INTO train (train_no, train_name, source_st, destination_st, running_days) VALUES (?,?,?,?,?)";
    }
    else {
      echo "emptyfields";
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
        // echo "success";
					mysqli_stmt_bind_param($stmt,"isssi",$tnumber,$tname,$source,$destination,$runningDays);
		 		 	mysqli_stmt_execute($stmt);

			 	}

?>
