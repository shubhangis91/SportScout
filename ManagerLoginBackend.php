<?php

if (isset($_POST['ManagerLogin'])) {


	$db = mysqli_connect("localhost", "root", "", "sportsscout");
    
    $ManagerUsername=$_POST['ManagerUsername'];
    
    $ManagerPassword=$_POST['ManagerPassword'];

    $sql="SELECT * FROM manager Where ManagerUsername='$ManagerUsername' and ManagerPassword='$ManagerPassword' ";

 
if ($res = mysqli_query($db, $sql)) { 
    
    

    if (mysqli_num_rows($res) > 0) { 
    	
        echo "Manager Id: ".$ManagerUsername;
        echo "Your added places";

        
        $sql="SELECT * From manager Natural Join venues Natural Join placebooking Where ManagerUsername='$ManagerUsername'";
        //  where ManagerUsername='$ManagerUsername";

        //session_start();
        //$_SESSION["trainerUsername"] = $trainerUsername;
        $res = mysqli_query($db, $sql);

        if ($res){
            
        if (mysqli_num_rows($res) > 0){
            
        while ($row = mysqli_fetch_array($res)) { 
            
            echo "<br>";
            echo $row['PlaceName'];
            echo "   ";
            echo $row['Date'];
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
    }
        }



		
        
      	

		}

	}
    
    echo "<br>";  
    echo "Want to add new places";
    echo "<br>";

    


    } 
    else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/trainerLoginFront.php';
        </script>"; 
    }     




?>
