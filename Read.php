<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
include_once('Software.php');
session_start();
$sql = "SELECT id, FName, LName FROM user";
$result = mysqli_query($dbname,$sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    echo $GetInfo="SELECT * FROM user WHERE id = "  "<tr><td>" . $row["id"]. "</td><td>" . $row["FName"]. " " . $row["LName"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>
</html>