<?php

		include_once ('dbh_inc.php') ;		//includes database connection file

		//assigning values to php variables	using $_POST
		// $uname	= $_POST['uname'];
		// $password 	= $_POST['psw'];
		$phone 	= $_POST['phone'];
 		// $hashedPwd = password_hash($password,PASSWORD_DEFAULT);	//hasing the password

if (is_numeric($phone)) {
echo "yes";
}
else {
  echo "no";
}




?>
