<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];
		$tname 	= $_POST['tname'];
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $runningDays 	= $_POST['runningDays'];
    $distance = $_POST['distance'];
    $ticketPrice = $_POST['ticketPrice'];

    if (!empty($tnumber) && !empty($tname) && !empty($source) && !empty($destination) && !empty($runningDays) && !empty($distance) && !empty($ticketPrice)) {
        $sql="INSERT INTO train (train_no, train_name, source_st, destination_st, running_days, distance, ticket_price) VALUES (?,?,?,?,?,?,?)";
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
					mysqli_stmt_bind_param($stmt,"isssiii",$tnumber,$tname,$source,$destination,$runningDays, $distance, $ticketPrice);
		 		 	mysqli_stmt_execute($stmt);

			 	}

?>
