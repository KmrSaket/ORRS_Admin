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
				<p style="margin-top:10vh">Online railway reservation system(ORRS) is a small initiative from us in order to make people's life a bit simpler by enabling them to stay home and book a railway ticket for any place they wish to visit. It got all the basic functionalities that a railway reservation system should have. One can sign up into the portal just by providing few basic credentials. Once the user gets to login he/she can choose the source, destination and date for booking.
After a successful login a user gets many functionalities in our portal such as view transactions, chick PNR etc. Whereas, the admin here gets to perform certain different functionalities such as viewing all the users that have logged in into the portal, update/delete user's profile, add/update train etc.This system is basically concerned with the reservation and cancellation of railway tickets to the passenger. The need of this system arouse because as is the known fact that India has the largest railway network in the whole world and it is not posible to handle such a large system manually. By computerizing it, it became possible to overcome the limitations make the system operatioms more efficient.</p>
			</div>



</body>
<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/login.js"></script>
</html>
