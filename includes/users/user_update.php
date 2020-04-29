<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


		$sql = " ";  //sql to update data of uesr
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
        //error message
				exit();
			}
			else{
				//execute sql
		}

?>
