<html>

<body>

<script>

function validateForm() {
  
  /*
  var Username = document.forms["trainerSignup"]["trainerUsername"].value;
  if (Username == "") {
    alert("Username must be filled out");
    return false;
  }
  */

  var Password = document.forms["trainerSignup"]["trainerPassword"].value;
  if (Password.length < 5) {
    alert("Password must be atleast 5 characters long");
    return false;
  }

}


</script>

  <form name="trainerSignup" method="POST" action="TrainerSignupBackend.php" enctype="multipart/form-data" >
   
  	
    Username:<input type="text" placeholder="Select a Username" name="trainerUsername" required />
    <br/>
    Password:<input type="text" name="trainerPassword" placeholder="@1efjrebfX"/>
    <br/>
    Name:<input type="text" placeholder="Vishal Patel" name="trainerName" required />
    <br/>
    Age:<input type="number" name="trainerAge"/>
    <br/>
    Gender:<input type="text" placeholder="MALE FEMALE" name="trainerGender"/>
    <br/>
    BIO:<input type="text" placeholder="Experience Interests" name="trainerBio"/>
    <br/>
    Address:<input type="text" placeholder="10th St, Fountain Park" name="trainerAddress"/>
    <br/>
    City:   <select name="trainerCity" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='cricket'>Indianapolis</option>
            </select>

    <br>
    Contact:<input type="text" placeholder="2245507895" name="trainerContact"/>
    <br/>
    Profile pic:
    <input type="file" name="trainerPhoto">

  	<div>
  		<button type="submit" name="trainerSignup">SIGN UP</button>
  	</div>
  
  </form>


</body>
</html>
