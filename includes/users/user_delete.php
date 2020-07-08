<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


		//assigning values to php variables	using $_POST
		$uname	= $_POST['uname'];


		$sql = "DELETE FROM passenger WHERE user_name = ?;";  //sql to delete data of uesr
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
        //error message
				echo "error";
				exit();
			}
			else{
				//execute sql
				mysqli_stmt_bind_param($stmt,"s",$uname);
				if (mysqli_stmt_execute($stmt)) {
					echo "Train Deleted Successfully!";
				}
		}

?>
