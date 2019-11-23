
<center>

        Make Announcement for Trainers:


        <form action='#' method='post'>
            Sports:
            
            <select name="LookingForSports[]" multiple required> 
            <option value='soccer'>Soccer</option>
            <option value='cricket'>Cricket</option>
            <option value='tennis'>Tennis</option>
            <option value='badminton'>Badminton</option>
            <option value='football'>Football</option>
            </select>
            </select>
            

            <input type="Submit" name='LookingforTrainers' value='Submit Sports' />
            
        </form>
        
        </center>

        <?php


        if (isset($_POST['LookingforTrainers'])) {


        $db = mysqli_connect("localhost", "root", "", "sportsscout");
       
        session_start();


        $playersUsername=$_SESSION["playersUsername"]; 
        
        
        $delete="DELETE FROM playerslookingtrainer WHERE playersUsername='$playersUsername'";
    
        mysqli_query($db, $delete);
        foreach ($_POST['LookingForSports'] as $select)
        {
        //echo "You have selected :" .$select; // Displaying Selected Value
        $sql="INSERT INTO playerslookingtrainer Values('$playersUsername','$select')";
        
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
