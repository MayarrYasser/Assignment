<html>


<?php
    $id=$_GET['id'];
	$FName='';
	$LName='';
	
	
	$Password='';
	$UsertypeID='';
	
	
	$con=new mysqli("Localhost","root","","soft");
	$sql="select *from user where id=$id";
	$result=mysqli_query($con,$sql);
	while($res = mysqli_fetch_array($result))
{
   
		
	$FName=$res['FName'];
	$LName=$res['LName'];
	
	
	$Password=$res['Password'];
	$UsertypeID=$res['UsertypeID'];
	
}
?>
<body>

<div class="container">
<form action="ApplyEdit3.php" method="post">
	<table>
		<tr>
			<td><b>First Name:</b></td>
			<td><input class="txt759" type="text" name="FName" value="<?php echo $FName;?>"></td>
		</tr>
		<tr>
			<td><b>Last Name:</b></td>
			<td><input class="txt759" type="text" name="LName" value="<?php echo $LName;?>"></td>
		</tr>
		
			<tr>
			<td><b>Password:</b></td>
			<td><input class="txt759" type="text" name="password" value="<?php echo $Password;?>"></td>
		</tr>
		
			<tr>
			<td><b>TypeofUser:</b></td>
			<td>
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
					</td>
		</tr>
		
		<tr>
			
			<td><input class="sds" type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</div>
</html>