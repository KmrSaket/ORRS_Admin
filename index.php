<?php
	session_start();
	if(isset($_SESSION['adminSession'])){
		session_unset();
		session_destroy();
		header("Location: index.php?admin=logged_out");
	}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="style\login.css">
  <link rel="stylesheet" href="style\bootstrap.css">

</head>

<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Online Railway Reservation System</h1>
      <p class="lead">Administrative Portal</p>
    </div>
  </div>

  <div class="container  col-md-3 b">
    <form action="includes\admin_login_inc.php" method="POST" name="loginform">
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="adminName">Admin Name</label>
            <input type="text" class="form-control md-6" id="adminName" name="admin_name" placeholder="Enter username">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="adminPassword">Password</label>
            <input type="password" class="form-control md-6" id="adminPassword" name="admin_password" placeholder="Enter password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" name="admin_login_btn" class="btn btn-outline-success" id="loginBtn">Login</button>
        </div>
      </div>
    </form>
  </div>


	<!-- login error modal start -->


  <div id="loginErrorModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"  >
      <div class="modal-content  text-center" id="errormsg" style="padding:5vh 2vh">

      </div>
    </div>
  </div>


	<!-- login error modal end -->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js\login.js"></script>
</html>
