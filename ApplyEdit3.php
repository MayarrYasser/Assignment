<?php
$con = new mysqli("localhost", "root", "","soft");
if(isset($_POST['submit']))
{
	$ID1=$_POST['id'];
	$FName=$_POST['FName'];
	$LName=$_POST['LName'];
	
	$Password=$_POST['Password'];
	$UsertypeID=$_POST['UsertypeID'];
	
	$result="update user set 
	
		FName='$FName',
	    LName='$LName',
	
	Password='$Password',
		UsertypeID='$UsertypeID',
	
	";
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	
	<th>FirstName</th>
	<th>LastName</th>
	
	<th>Password</th>
	<th>UsertypeID</th>
	
	</tr>";
	echo "<tr>";
	
		echo"<td>".$FName."</td>";
	echo"<td>".$LName."</td>";
	echo"<td>".$Password."</td>";
	
	
	
	echo"<td>".$UsertypeID."</td>";
	
	echo"</tr>";
	 echo"</table>";
	mysqli_query($con,$result);
}
?>