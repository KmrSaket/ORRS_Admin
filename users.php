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
  <title>Document</title>
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
			<a class="navbar-brand" href="dashboard.php"><button class="nav_btn" id="dropdownMenu0" >About</button></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">


						<li>
							<button class="nav_btn" id="dropdownMenu1"  style="background-color:#c1c1c1;">Users</button>
						</li>



						<!-- dummy navs starts-->

						<li>
							<a href="users.php"><button class="nav_btn" id="dropdownMenu1">Users</button></a>
						</li>
						<li>
							<a href="users.php"><button class="nav_btn" id="dropdownMenu1">Users</button></a>
						</li>
						<li>
							<a href="users.php"><button class="nav_btn" id="dropdownMenu1">Users</button></a>
						</li>
						<li>
							<a href="users.php"><button class="nav_btn" id="dropdownMenu1">Users</button></a>
						</li>

						<!-- dummy navs ends-->

			    </ul>
			      <a class="btn btn-outline-danger my-2 my-sm-0" type="button" name="logout" id="logoutbtn" href="includes/admin_logout_inc.php">Logout</a>
			  </div>
		</nav>

		<!-- navigation bar ends -->




		<!-- list of all users (table starts) -->

		<div class="container">
			<div class="row justify-content-center">
				<table class="table table-hover text-center" style="margin-top:10vh;">
					<thead class="thead-dark" >
						<tr>
							<th>id</th>
							<th>name</th>
							<th>email</th>
						</tr>
					</thead>
					<tbody id="response">

					</tbody>
				</table>
			</div>
		</div>



		<!-- list of all users (table ends) -->



</body>
<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/users.js"></script>
</script>
</html>
