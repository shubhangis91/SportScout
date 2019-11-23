		<center>
		Sports:

		<form action='#' method='post'>
			<select name='Sports[]' multiple> 
			<option value='soccer'>Soccer</option>
			<option value='cricket'>Cricket</option>
			<option value='tennis'>Tennis</option>
			<option value='badminton'>Badminton</option>
			<option value='football'>Football</option>
			</select>
			<input type="Submit" name='Sportssubmit' value='Submit Sports' />
		</form>
		</center>

		<?php


		if (isset($_POST['Sportssubmit'])) {


		$db = mysqli_connect("localhost", "root", "", "sportsscout");

		session_start();


		$playersUsername=$_SESSION["playersUsername"];

		$delete="DELETE FROM sporthobbies WHERE playersUsername='$playersUsername'";
	
		mysqli_query($db, $delete);

		foreach ($_POST['Sports'] as $select)
		{
		//echo "You have selected :" .$select; // Displaying Selected Value
		$sql="INSERT INTO sporthobbies Values('$playersUsername','$select')";
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
		