<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


		$sql = "SELECT * FROM train ";
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

						// converting binary codded running days into alphabets
						$rawrunningdays=(string)$result['running_days'];
						$days="";

						if ($rawrunningdays[1]=="1") {
							$days = $days."Su";
						}
						if ($rawrunningdays[2]=="1") {
							$days = $days."M";
						}
						if ($rawrunningdays[3]=="1") {
							$days = $days."T";
						}
						if ($rawrunningdays[4]=="1") {
							$days = $days."W";
						}
						if ($rawrunningdays[5]=="1") {
							$days = $days."Th";
						}
						if ($rawrunningdays[6]=="1") {
							$days = $days."F";
						}
						if ($rawrunningdays[7]=="1") {
							$days = $days."S";
						}


            ?>

							<tr class="rowSelect">

									<td> <?php echo $result['train_no']; ?> </td>
									<td> <?php echo $result['train_name']; ?> </td>
									<td> <?php echo $result['source_st']; ?> </td>
									<td> <?php echo $result['destination_st']; ?> </td>
									<td> <?php echo $days; ?> </td>
									<td> <?php echo $result['running_days']; ?> </td> 	<!--hidden in front end-->

									<td> <?php echo $result['fare']; ?> </td>
                  <td> <?php echo $result['distance']; ?> </td>
							</tr>

						<?php
          }
        }
				else {
					?>
					<tr class="table-danger">
						<td colspan="5">
							<h5> No Trains in Database!</h5>
						</td>
					</tr>
					<?php
				}
		}

?>
