<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


		$sql = "SELECT * FROM passenger ";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				?>
				<tr class="table-danger">
					<td colspan="5">
						<h5> An Error occured while connecting to database!</h5>
					</td>
				</tr>

				<?php
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
				else {
					?>
					<tr class="table-danger">
						<td colspan="5">
							<h5> No Users in Database!</h5>
						</td>
					</tr>
					<?php
				}
		}

?>
