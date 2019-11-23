<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sportsscout");


 // If upload button is clicked ...
  
  if (isset($_POST['upload'])) {
  	// Get image name

  	$image = $_FILES['playersPhoto']['name'];
  	
    // Get text    

    $playersUsername=$_POST['playersUsername'];
    $playersPassword=$_POST['playersPassword'];
    $playersName=$_POST['playersName'];
    $playersAge=$_POST['playersAge'];
    $playersGender=$_POST['playersGender'];
    $playersBio=$_POST['playersBio'];
    $playersAddress=$_POST['playersAddress'];
    $playersCity=$_POST['playersCity'];
    $playersContact=$_POST['playersContact'];


  	// image file directory
  	$target = "images/".basename($image);

  	$file_ext=explode('.',$_FILES['playersPhoto']['name']);
    $file_ext=strtolower(end($file_ext));
    $extensions= array("jpeg","jpg","png");
      
     if(in_array($file_ext,$extensions)=== false){
          //echo "<script> alert('Please Upload a JPEG,JPG or PNG file')</script>";
          //header("Location: http://localhost/sportsscout/playersSignupFrontEnd.php");

          echo "<script>
          alert('Please Upload a JPEG,JPG or PNG file');
          window.location.href='http://localhost/sportsscout/playersSignupFrontEnd.php';
        </script>";
      }





  	$sql = "INSERT INTO playerssignup VALUES ('$playersUsername','$playersPassword','$playersName','$playersAge',
    '$playersGender','$playersBio','$playersAddress',
    '$playersCity','$playersContact','$image')";
  	// execute query
  	
  	if(mysqli_query($db, $sql))
  		{
  			echo "<script>
        alert('Signed up successfully');
        window.location.href='http://localhost/sportsscout/playersLoginFront.php';
        </script>";
       // header("Location: http://localhost/sportsscout/playersLoginFront.php");
  		}
  	else{
  		echo "<script>
        alert('UserName already exists');
        window.location.href='http://localhost/sportsscout/playersSignupFrontEnd.php';
        </script>";
  	}

  	if (move_uploaded_file($_FILES['playersPhoto']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";

  	}else{
  		$msg = "Failed to upload image";
  	}
  } 
    

    //$result = mysqli_query($db, "SELECT * FROM playerssignup");
?>


<?php
/*
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<p>".$row['playersUsername']."</p>";
        echo "<img width='400px' height=''300px' src='images/".$row['playersPhoto']."' >";
      	
      echo "</div>";
 
    }
 */
  ?>

