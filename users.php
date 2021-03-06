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
	<link rel="stylesheet" href="style\users.css">
	<style>
		tr{
			cursor: pointer;
		}
	</style>
  <link rel="stylesheet" href="style\dashboard.css">
  <link rel="stylesheet" href="style\bootstrap.css">
  <title>Users</title>
</head>
<body>

		<!-- heading starts -->

		<div class="jumbotron jumbotron-fluid" style="margin-bottom:0">
	    <div class="container">
	      <h1 class="display-4">Online Railway Reservation System</h1>
	      <p class="lead">Administrative Portal</p>
	    </div>
	  </div>

		<!-- heading end -->


		<!-- navigation bar starts -->

		<nav class="navbar navbar-expand-sm  navbar-dark bg-dark" style="padding-left:10vh; padding-right:10vh;">
			<a class="navbar-brand" href="dashboard.php"><button class="nav_btn" >About</button></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">


						<li class="nav-item">
							<a class="nav-link" href="#"><button class="nav_btn" id="dropdownMenu1"  style="background-color:#c1c1c1;">Users</button></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="trains.php"><button class="nav_btn" id="dropdownMenu1">Trains</button></a>
						</li>
			    </ul>
			      <a class="btn btn-outline-danger my-2 my-sm-0" type="button" name="logout" id="logoutbtn" href="includes/admin_logout_inc.php">Logout</a>
			  </div>
		</nav>

		<!-- navigation bar ends -->




		<!-- list of all users (table starts) -->

		<div class="container">
			<div class="row justify-content-center">
				<table class="table table-hover text-center" style="margin-top:10vh;" id="userTable">
					<thead class="thead-dark" >
						<tr>
							<th>User Name</th>
							<th>Email</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody  id="response">
							<tr class="table-info">
								<td colspan="5">
									<h5> Please Wait!</h5>
								</td>
							</tr>
					</tbody>

				</table>
			</div>
		</div>



		<!-- list of all users (table ends) -->




		<!-- user form (modal start) -->

		<div id="userModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md modal-dialog-centered" role="document"  >
					<div class="modal-content  text-center" style="padding:5vh 2vh">
						<div class="modal-header">
		        	<h5 class="modal-title">
										<input id="uname" disabled style="background-color:white; border:none;">
							</h5>
		      	</div>
						<br>
						<form class="form" id="userform">
							<div class="form-group ">
								<div class="row align-items-start ">
									<div class="col-4 justify-content-start">
										<label for="phone">Phone Number</label>
									</div>
									<div class="col-4">
										<input id="phone"  class="form-control" >
									</div>
								</div>
								<br>
								<div class="row align-items-start">
									<div class="col-4 justify-content-start" >
										<label for="password" > Change Password</label>
									</div>
									<div class="col-4">
										<input id="password" type="password" placeholder="Enter New Password" class="form-control md-6" autocomplete="on">
									</div>
								</div>
								<br>
							</div>
							<br>
							<div class="row row-cols-3">
								<div class="col-4">
									<button type="button" class="btn btn-primary form_buttons" id="update" >Update Profile</button>
								</div>
								<div class="col-4">
									<button type="button" class="btn btn-danger form_buttons" id="delete">Delete Profile</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>




			<!--user form (modal ends) -->





<!-- Generic Error msg (modal starts) -->



  <div id="errormodal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"  >
      <div class="modal-content  text-center" id="error" style="padding:5vh 2vh">

      </div>
    </div>
  </div>


<!-- Generic Error msg (modal ends) -->








</body>
<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/users.js"></script>

</html>
