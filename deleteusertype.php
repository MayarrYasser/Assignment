<?php
include_once('Software.php');
$sql = "DELETE FROM usertype WHERE id = '" . $_SESSION['usertypeSelectedID'] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Account deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>