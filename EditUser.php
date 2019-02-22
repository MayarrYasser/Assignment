
<style>
table {
	margin-top: 20px;	
  border-collapse: collapse;
  width: 100%;
}
table th, table td {
  text-align: left;
  padding: 8px;
}
table tr
{
	background-color: white
}
table th {
  background-color: #1c9ac2;
  color: white;
}
</style>

<?php
$con = new mysqli("localhost", "root", "","soft");
$id1=$_SESSION['id'];
$sql="select * from user where id = '" . $_SESSION['userSelectedID'] . "'";
$result = mysqli_query($con,$sql);		
if(mysqli_num_rows($result) > 0)
{
	
	echo"<form method='post' action=''>";
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	
					<th>id</th>
					<th>FName</th>
                    <th>LName</th>
					<th>Password</th> 
                    <th>UsertypeID</th>
					<th>edit</th>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo"<td>" .$row['id']. "</td>";
	echo"<td>" .$row['FName']. "</td>";
	echo"<td>" .$row['LName']. "</td>";
	echo"<td>" .$row['Password']. "</td>";
	echo"<td>" .$row['UsertypeID']. "</td>";
    echo"<td><a href='editUser.php?id4=".$row['id']."'>Edit</a></td>";
	echo"</tr>";
    }
   echo"</table>";
 }
?>