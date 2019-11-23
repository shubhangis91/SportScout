<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sportsscout");


 // If upload button is clicked ...
  
  if (isset($_POST['trainerSignup'])) {
  	// Get image name

  	$image = $_FILES['trainerPhoto']['name'];
  	
    // Get text    

    $trainerUsername=$_POST['trainerUsername'];
    $trainerPassword=$_POST['trainerPassword'];
    $trainerName=$_POST['trainerName'];
    $trainerAge=$_POST['trainerAge'];
    $trainerGender=$_POST['trainerGender'];
    $trainerBio=$_POST['trainerBio'];
    $trainerAddress=$_POST['trainerAddress'];
    $trainerCity=$_POST['trainerCity'];
    $trainerContact=$_POST['trainerContact'];


  	// image file directory
  	$target = "images/".basename($image);

  	$file_ext=explode('.',$_FILES['trainerPhoto']['name']);
    $file_ext=strtolower(end($file_ext));
    $extensions= array("jpeg","jpg","png");
      
     if(in_array($file_ext,$extensions)=== false){
          //echo "<script> alert('Please Upload a JPEG,JPG or PNG file')</script>";
          //header("Location: http://localhost/sportsscout/trainerSignupFrontEnd.php");

          echo "<script>
          alert('Please Upload a JPEG,JPG or PNG file');
          window.location.href='http://localhost/sportsscout/TrainerSignupFrontEnd.php';
        </script>";
      }





  	$sql = "INSERT INTO trainersignup VALUES ('$trainerUsername','$trainerPassword','$trainerName','$trainerAge',
    '$trainerGender','$trainerBio','$trainerAddress',
    '$trainerCity','$trainerContact','$image')";
  	// execute query
  	
  	if(mysqli_query($db, $sql))
  		{
  			echo "<script>
        alert('Signed up successfully');
        window.location.href='http://localhost/sportsscout/trainerLoginFront.php';
        </script>";
       // header("Location: http://localhost/sportsscout/trainerLoginFront.php");
  		}
  	else{
  		echo "<script>
        alert('UserName already exists');
        window.location.href='http://localhost/sportsscout/TrainerSignupFrontEnd.php';
        </script>";
  	}

  	if (move_uploaded_file($_FILES['trainerPhoto']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";

  	}else{
  		$msg = "Failed to upload image";
  	}
  } 
    

    //$result = mysqli_query($db, "SELECT * FROM trainersignup");
?>


<?php
/*
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<p>".$row['trainerUsername']."</p>";
        echo "<img width='400px' height=''300px' src='images/".$row['trainerPhoto']."' >";
      	
      echo "</div>";
 
    }
 */
  ?>

