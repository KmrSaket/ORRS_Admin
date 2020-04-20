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
  <title>Login Page</title>
  <link rel="stylesheet" href="style\login.css">
  <link rel="stylesheet" href="style\bootstrap.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

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
  <div id="loginErrorModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"  >
      <div class="modal-content  text-center" id="errormsg" style="padding:5vh 2vh">

      </div>
    </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js\login.js"></script>
</html>
