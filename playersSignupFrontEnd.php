<html>

<body>

  <form method="POST" action="playersSignup.php" enctype="multipart/form-data">
  	
  	
    Username:<input type="text" placeholder="Select a Username" name="playersUsername"/>
    <br/>
    Name:<input type="text" placeholder="Vishal Patel" name="playersName"/>
    <br/>
    Age:<input type="number" name="playersAge"/>
    <br/>
    Gender:<input type="text" placeholder="MALE FEMALE" name="playersGender"/>
    <br/>
    BIO:<input type="text" placeholder="Experience Interests" name="playersBio"/>
    <br/>
    Address:<input type="text" placeholder="10th St, Fountain Park" name="playersAddress"/>
    <br/>
    City:<input type="text" placeholder="Bloomington" name="playersCity"/>
    <br/>
    Contact:<input type="text" placeholder="2245507895" name="playersContact"/>
    <br/>
    Profile pic:
    <input type="file" name="playersPhoto">

  	<div>
  		<button type="submit" name="upload">SIGN UP</button>
  	</div>
  </form>


</body>
</html>
