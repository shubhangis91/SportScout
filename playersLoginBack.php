
<?php

if (isset($_POST['playerLogin'])) {

	$db = mysqli_connect("localhost", "root", "", "sportsscout");
    
    $playersUsername=$_POST['playersUsername'];
    
    $playersPassword=$_POST['playersPassword'];

    $sql="SELECT * FROM playerssignup WHERE playersUsername='$playersUsername' and playersPassword='$playersPassword'";

 
if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	echo "Your Profile";
        echo "<table>"; 

        session_start();
        $_SESSION["playersUsername"] = $playersUsername;


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td rowspan='9'> <img src=images/".$row['playersPhoto'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>Username      ".$row['playersUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Name      ".$row['playersName']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Age      ".$row['playersAge']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Gender      ".$row['playersGender']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Bio      ".$row['playersBio']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Address      ".$row['playersAddress']."</td>"; 

            echo "</tr>";


            echo "<tr>";

            echo "<td>City      ".$row['playersCity']."</td>"; 

            echo "</tr>";

            echo "<tr>";

            echo "<td>Contact      ".$row['playersContact']."</td>"; 

            echo "</tr>";

            
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
        echo "</table>"; 

		
        
      	

		}

	}
     
     
$sportssql="SELECT playersSport FROM playerssignup 
    natural join sporthobbies where playersUsername='$playersUsername'";

    if ($res = mysqli_query($db, $sportssql)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "Your Interests \n";
        echo "<table>"; 


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td>Sport    ".$row['playersSport']."</td>";

            echo "</tr>";

        echo "</table>";

        
        //mysqli_free_res($res); 
    }

    }
}


$looking_for_trainer="SELECT playersSport FROM playerssignup 
    natural join playerslookingtrainer where playersUsername='$playersUsername'";

    if ($res = mysqli_query($db, $looking_for_trainer)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "You Want Coach For following Sports\n";
        echo "<table>"; 


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td>Sport    ".$row['playersSport']."</td>";

            echo "</tr>";

        echo "</table>";

        
        //mysqli_free_res($res); 
    }

    }
}



    echo "<br>";
    echo "<a href='playersSportInterest.php' target='_blank'>Select Interest</a>";
        echo "<br>";
        echo "<a href='otherPlayers.php' target='_blank'>Find nearby Players Trainer and Grounds</a>";
        echo "<br>";
        echo "<a href='player_lookingTrainers.php' target='_blank'>Announcement for Trainer</a>";
        

        echo "</center>";
        //mysqli_free_res($res); 
    
    } 
    else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/playersLoginFront.php';
        </script>"; 
    }     




?>
