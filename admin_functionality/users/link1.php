<?php
	session_start();
	if(!isset($_SESSION['adminSession'])){
		header("Location: index.php?loginrequired");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../style/dashboard.css">
  <link rel="stylesheet" href="../../style/bootstrap.css">
  <title>Document</title>
</head>
<body>
		<div class="jumbotron jumbotron-fluid" style="margin-bottom:0">
	    <div class="container">
	      <h1 class="display-4">Online Railway Reservation System</h1>
	      <p class="lead">Administrative Portal</p>
	    </div>
	  </div>



		<nav class="navbar navbar-expand-sm  navbar-dark bg-dark" style="padding-left:10vh; padding-right:10vh;">
		  <!-- <a class="navbar-brand" href="#">About</a> -->
		  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button> -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
						<li class="nav-item mr-5">
							<a href="../../dashboard.php"><button class="dropbtn" id="dropdownMenu0">About</button></a>
						</li>
						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu1" href="#" style="background-color:#c1c1c1;">Users</button>
								<div class="dropdown-content">
										<a href="#" style="color:black; text-decoration:none;">Link 1</a>
										<a href="link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>

						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu2" href="#">Trains</button>
								<div class="dropdown-content">
										<a href="../trains/link1.php" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="../trains/link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="../trains/link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>
						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu3" href="#">Fare</button>
								<div class="dropdown-content">
										<a href="../fare/link1.php" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="../fare/link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="../fare/link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>
			    </ul>
			      <a class="btn btn-outline-danger my-2 my-sm-0" type="button" name="logout" id="logoutbtn" href="../../includes/admin_logout_inc.php">Logout</a>
			  </div>
		</nav>





		<!-- <?php
	  		if(isset($_SESSION['adminSession'])){
	  			echo '<h3>You are logged in !</h3>';
	  		}

	  	?> -->



</body>
<script type="text/javascript" src="../../js/bootstrap.js">

</script>
</html>
