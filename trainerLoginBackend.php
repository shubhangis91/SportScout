<?php

if (isset($_POST['trainerLogin'])) {

	$db = mysqli_connect("localhost", "root", "", "sportsscout");
    
    $trainerUsername=$_POST['trainerUsername'];
    
    $trainerPassword=$_POST['trainerPassword'];

    $sql="SELECT * FROM trainersignup";

 
if ($res = mysqli_query($db, $sql)) { 
    
    echo "run";
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	echo "Your Profile";
        echo "<table>"; 

        session_start();
        $_SESSION["trainerUsername"] = $trainerUsername;


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td rowspan='9'> <img src=images/".$row['image'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>Username      ".$row['trainerUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Name      ".$row['trainerName']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Age      ".$row['trainerAge']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Gender      ".$row['trainerGender']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Bio      ".$row['trainerBio']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Address      ".$row['trainerAddress']."</td>"; 

            echo "</tr>";


            echo "<tr>";

            echo "<td>City      ".$row['trainerCity']."</td>"; 

            echo "</tr>";

            echo "<tr>";

            echo "<td>Contact      ".$row['trainerContact']."</td>"; 

            echo "</tr>";

            
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
        echo "</table>"; 

		echo "<a href='trainerSportInterest.php' target='_blank'>Select Interest</a>";
		echo "<br>";
		echo "<a href='othertrainer.php' target='_blank'>Find nearby trainer</a>";
		echo "<br>";
		echo "<a href='player_lookingTrainers.php' target='_blank'>Announcement for Trainer</a>";
		
        
      	

		}

	}
     

        echo "</center>";
        //mysqli_free_res($res); 
    } 
    else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/trainerLoginFront.php';
        </script>"; 
    }     




?>
