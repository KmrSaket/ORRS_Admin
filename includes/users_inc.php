<?php

		include_once ('dbh_inc.php') ;		//includes database connection file


		$sql = "SELECT * FROM passenger ";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../index.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_execute($stmt);
				$query=mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($query)>0){
  				while ($result=mysqli_fetch_array($query)) {
            ?>

							<tr class="rowSelect">

									<td> <?php echo $result['user_name']; ?> </td>
									<td> <?php echo $result['email']; ?> </td>
									<td> <?php echo $result['fname']; ?> </td>
									<td> <?php echo $result['lname']; ?> </td>
									<td> <?php echo $result['phone']; ?> </td>
							</tr>

						<?php
          }
        }
		}

?>
