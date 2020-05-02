<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


		//assigning values to php variables	using $_POST
		$tnumber	= $_POST['tnumber'];


		$sql = "DELETE FROM train WHERE train_no = ?;";  //sql to delete data of uesr
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
        //error message
				echo "error";
				exit();
			}
			else{
				//execute sql
				mysqli_stmt_bind_param($stmt,"i",$tnumber);
				mysqli_stmt_execute($stmt);

		}

?>
