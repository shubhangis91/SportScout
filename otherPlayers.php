
<center>
        Sports:

        <form action='#' method='post'>
            City Name:
            <select name="City" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='cricket'>Indianapolis</option>
            </select>
            
            <br>
            Sports:
            
            <select name="Sports" required>
                <option value='soccer'>Soccer</option>
                <option value='cricket'>Cricket</option>
                <option value='tennis'>Tennis</option>
                <option value='badminton'>Badminton</option>
                <option value='football'>Football</option>
            </select>
            

            <input type="Submit" name='otherPlayersSubmit' value='Submit Sports' />
            
        </form>
        
        </center>


        <script type='text/JavaScript'>  
        function bookVenue()
        {
            alert()
        } 
        </script>; 


        <?php


        if (isset($_POST['otherPlayersSubmit'])) {


        $db = mysqli_connect("localhost", "root", "", "sportsscout");
        
        $Sports=$_POST['Sports']; 
        
        $City=$_POST['City'];

        $sql="SELECT *  FROM playerssignup natural join sporthobbies WHERE playersCity='$City' and playersSport='$Sports'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	echo "Other Players";
         


       while ($row = mysqli_fetch_array($res)) { 
            
            echo "<table>";

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

            echo "</table>";

            echo "<br><br><br>";    
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
         
        

		}

	}
     

// Displaying Trainers

    $sql="SELECT *  FROM trainersignup natural join 
    trainersporthobbies WHERE trainerCity='$City' and trainerSports='$Sports'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "Trainers Available";
         


       while ($row = mysqli_fetch_array($res)) { 
            
            echo "<table>";

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

            echo "</table>";

            echo "<br><br><br>";    
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
         
        

        }

    }
     

    $sql="SELECT * From manager Natural Join venues Natural Join placebooking";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "<br> <br>Places Available<br>";
         

       echo "<select>";
       while ($row = mysqli_fetch_array($res)) { 
            echo "<option value=".$row['PlaceName'].">".$row['PlaceName'].$row['ManagerUsername']."<br>
            </option>";
             
        }

        echo "</select>";
        echo "Book: <button name='book'  onclick='bookVenue()'>Book this Place</button>";
  
        

         
        

        }

    }




        echo "</center>";
        //mysqli_free_res($res); 
    } 
    

?>
