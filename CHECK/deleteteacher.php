<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
    "DELETE FROM staff WHERE s_id = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), $drop);
if ($drop) {

    header("Location:addteachers.php");

} else {
    echo 'Error';
}
?>

