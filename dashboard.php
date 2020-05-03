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
  <link rel="stylesheet" href="style\bootstrap.css">
  <title>About</title>
</head>
<body>
		<div class="jumbotron jumbotron-fluid" style="margin-bottom:0">
	    <div class="container">
	      <h1 class="display-4">Online Railway Reservation System</h1>
	      <p class="lead">Administrative Portal</p>
	    </div>
	  </div>


		<!-- nav bar starts -->

		<nav class="navbar navbar-expand-sm  navbar-dark bg-dark" style="padding-left:10vh; padding-right:10vh;">
			<a class="navbar-brand" href="#"><button class="nav_btn" id="dropdownMenu0"  style="background-color:#c1c1c1;">About</button></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="users.php"><button class="nav_btn" > Users</button></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="trains.php"><button class="nav_btn" >Trains	</button></a>
						</li>

						<!-- dummy navs starts-->


						<!-- <li class="nav-item">
							<a class="nav-link" href="users.php"><button class="nav_btn" >dummy</button></a>
						</li> -->



						<!-- dummy navs ends-->





						<!-- for hoverable drop down menu (start) -->

						<!-- <li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu1" href="#">Users</button>
								<div class="dropdown-content">
										<a href="admin_functionality/users/link1.php" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="admin_functionality/users/link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="admin_functionality/users/link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li> -->

						<!-- <li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu2" href="#">Trains</button>
								<div class="dropdown-content">
										<a href="admin_functionality/trains/link1.php" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="admin_functionality/trains/link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="admin_functionality/trains/link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li> -->

						<!-- <li class="nav-item mr-5">
							<div class="dropdown">
			        	<button class="dropbtn" id="dropdownMenu3" href="#">Fare</button>
								<div class="dropdown-content">
										<a href="admin_functionality/fare/link1.php" style="color:black; text-decoration:none; ">Link 1</a>
										<a href="admin_functionality/fare/link2.php" style="color:black; text-decoration:none;">Link 2</a>
										<a href="admin_functionality/fare/link3.php" style="color:black; text-decoration:none;">Link 3</a>
									</div>
								</div>
			      </li> -->

							<!-- for hoverable drop down menu (ends) -->




			    </ul>
			      <a class="btn btn-outline-danger my-2 my-sm-0" type="button" name="logout" id="logoutbtn" href="includes/admin_logout_inc.php">Logout</a>
			  </div>
		</nav>





		<!-- <?php
	  		if(isset($_SESSION['adminSession'])){
	  			echo '<h3>You are logged in !</h3>';
	  		}

	  	?> -->



			<div class="container">
				<p style="margin-top:10vh">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>



</body>
<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/login.js"></script>
</html>
