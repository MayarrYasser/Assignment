
<form method="post">

		
			<label>FirstName:</label>
			<input type="text" name="FName" >
		<br>
  <br>
		
			<label>LastName:</label>
			<input type="text" name="LName" >
		<br>
  <br>

		
			<label>Password:</label>
			<input type="password" name="Password">
		<br>
  <br>
			<label>TypeofUser:</label>
			<select name="TYPE">
				<?php 
					$db = mysqli_connect('localhost', 'root', '', 'soft');
					$sql="select * from usertype";
					$res=mysqli_query($db,$sql);
					while ($row=mysqli_fetch_array($res))
					{
						echo "<option name='TYPE' value='".$row['id']."'>".$row['Name']."</option>";
					}
				 ?>
			</select>
		<br>
  <br>
			<button type="submit" name="Register" class="btn"> Submit </button>
	


<?php
session_start();
// initializing variables
$FName = "";
$LName    = ""; 
$Password = "";
$UsertypeID    = ""; 
		
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'soft');
// REGISTER USER
if (isset($_POST['Register'])) {
  // receive all input values from the form
  $FName = mysqli_real_escape_string($db,  $_POST['FName']);
  $LName	 = mysqli_real_escape_string($db,  $_POST['LName']);
  $Password = mysqli_real_escape_string($db,  $_POST['Password']);
  $UsertypeID 	 =mysqli_real_escape_string ($db,  $_POST['TYPE']);
  	$query = "INSERT INTO users (FName,LName,password,UsertypeID) 
  			  			  VALUES('$FName', '$LName', '$Password', '$UsertypeID')";
echo $query;
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $FName;
  	//$_SESSION['success'] = "You are now logged in";
  	//$_SESSION['usertype'] = $UsertypeID;
  	
  }
  
    
?>
</form>