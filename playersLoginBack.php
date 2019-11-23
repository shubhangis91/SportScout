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
        echo "</center>";
        //mysqli_free_res($res); 
    } 
    else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/playersLoginFront.php';
        </script>"; 
    }     

}

}
?>
