<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		$uname	= $_POST['uname'];
		$password 	= $_POST['psw'];
		$phone 	= $_POST['phone'];
 		$hashedPwd = password_hash($password,PASSWORD_DEFAULT);	//hasing the password




		// different sql statements depending on different cases
		if (!empty($password) && !empty($phone)) {
		 $sql = "UPDATE passenger SET password = ? , phone = ? WHERE user_name = ?";
		 // echo "both password and phone updated";
	 	}
		elseif (!empty($phone)) {
		  $sql = "UPDATE passenger SET phone = ? WHERE user_name = ?";
			// echo "phone updated";
		}
		elseif (!empty($password)){
		  $sql = "UPDATE passenger SET password = ? WHERE user_name = ?";
			// echo "password updated";
		}
		else {
			echo "nothing updated";
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
				if (!empty($password) && !empty($phone)){
					echo "both password and phone updated";
					mysqli_stmt_bind_param($stmt,"sis",$hashedPwd,$phone,$uname);
					mysqli_stmt_execute($stmt);
				}
				elseif (!empty($phone)) {
					echo "phone updated";
					mysqli_stmt_bind_param($stmt,"is",$phone,$uname);
					mysqli_stmt_execute($stmt);
				}
				elseif(!empty($password)){
						echo "password updated";
						mysqli_stmt_bind_param($stmt,"ss",$hashedPwd,$uname);
						mysqli_stmt_execute($stmt);
				}
		}

?>
