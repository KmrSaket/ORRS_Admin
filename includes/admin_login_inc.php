<?php


	if(isset($_POST['admin_login_btn'])){			//if login button is clicked

		include_once ('dbh_inc.php') ;		//includes database connection file


		//assigning values to php variables	using $_POST
		$uname	= $_POST['admin_name'];
		$password 	= $_POST['admin_password'];


		//check if all mandatory fields are filled
		if(empty($_POST['admin_name']) || empty($_POST['admin_password'])){
			header("Location: ../index.php?error=emptyfields");
			exit();
		}


		//if there is no error in the login form
		else{
			$sql = "SELECT * FROM admin WHERE admin_name = ?";
			$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../index.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$uname);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);

				//check if user_name exist (if $row = 1 then user exist)
				if($row=mysqli_fetch_assoc($result)){
					$pwdCheck=($password==$row['password'])?true:false;

					//check if password matches with the password in the database
					if($pwdCheck == false){
						header("Location: ../index.php?error=wrongpassword");
						exit();
					}
					elseif($pwdCheck == true){
						session_start();							//session started on successfull login
						$_SESSION['adminSession']=$row['admin_name'];	//session variable for user_name created
						header("Location: ../dashboard.php?login=success");
						exit();
					}
					else{
						header("Location: ../index.php?error=wrongpassword");	//double check for wrong password
						exit();
					}
				}
				else{
					header("Location: ../index.php?error=invalidadmin");
				exit();
				}
			}
		}
	}
?>
