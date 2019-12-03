		<center>
		Sports for Coaching:

		<form action='#' method='post'>
			<select name='Sports[]' multiple> 
			<option value='soccer'>Soccer</option>
			<option value='cricket'>Cricket</option>
			<option value='tennis'>Tennis</option>
			<option value='badminton'>Badminton</option>
			<option value='football'>Football</option>
			</select>
			<input type="Submit" name='CoachSportssubmit' value='Submit Sports' />
		</form>
		</center>

		<?php


		if (isset($_POST['CoachSportssubmit'])) {


		$db = mysqli_connect("localhost", "root", "", "sportsscout");

		session_start();


		$trainerUsername=$_SESSION["trainerUsername"];

		$delete="DELETE FROM trainersporthobbies WHERE trainerUsername='$trainerUsername'";
	
		mysqli_query($db, $delete);

		foreach ($_POST['Sports'] as $select)
		{
		//echo "You have selected :" .$select; // Displaying Selected Value
		$sql="INSERT INTO trainersporthobbies Values('$trainerUsername','$select')";
		if(mysqli_query($db, $sql))
			{
				echo "inserted";
			}
		else{
			echo "not inserting";
			}
		}

	}
		?>
		