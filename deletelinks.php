<?php
include_once('Software.php');
$sql = "DELETE FROM links WHERE id = '" . $_SESSION['linksSelectedID'] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Account deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>