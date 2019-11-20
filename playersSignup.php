<?php
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sportsscout");

 // Initialize message variable
  $msg = "";

 // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name

  	$image = $_FILES['playersPhoto']['name'];
  	
    // Get text    

    $playersUsername=$_POST['playersUsername'];
    $playersName=$_POST['playersName'];
    $playersAge=$_POST['playersAge'];
    $playersGender=$_POST['playersGender'];
    $playersBio=$_POST['playersBio'];
    $playersAddress=$_POST['playersAddress'];
    $playersCity=$_POST['playersCity'];
    $playersContact=$_POST['playersContact'];


  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO playerssignup VALUES ('$playersUsername', '$playersName','$playersAge',
    '$playersGender','$playersBio','$playersAddress',
    '$playersCity','$playersContact','$image')";
  	// execute query
  	if(mysqli_query($db, $sql))
  		{
  			echo " successfully query";
  		}
  	else{
  		echo "error";
  		echo error_log('message');
  	}

  	if (move_uploaded_file($_FILES['playersPhoto']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  } 
    $result = mysqli_query($db, "SELECT * FROM playerssignup");
?>

<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<p>".$row['playersUsername']."</p>";
        echo "<img width='400px' height=''300px' src='images/".$row['playersPhoto']."' >";
      	
      echo "</div>";
    }
  ?>

