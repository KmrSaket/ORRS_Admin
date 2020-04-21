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
  <link rel="stylesheet" href="style\dashboard.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
							<button class="dropbtn" id="dropdownMenu1" href="#">About</button>
						</li>
						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu1" href="#">Users</button>
								<div class="dropdown-content">
										<a href="#" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="#" style="color:black; text-decoration:none;">Link 2</a>
										<a href="#" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>

						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu1" href="#">Trains</button>
								<div class="dropdown-content">
										<a href="#" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="#" style="color:black; text-decoration:none;">Link 2</a>
										<a href="#" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>
						<li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu1" href="#">Fare</button>
								<div class="dropdown-content">
										<a href="#" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="#" style="color:black; text-decoration:none;">Link 2</a>
										<a href="#" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li>
			    </ul>
			      <a class="btn btn-outline-danger my-2 my-sm-0" type="button" name="logout" id="logoutbtn" href="	includes/admin_logout_inc.php">Logout</a>
			  </div>
		</nav>





		<!-- <?php
	  		if(isset($_SESSION['adminSession'])){
	  			echo '<h3>You are logged in !</h3>';
	  		}

	  	?> -->



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
