<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
    "DELETE FROM class WHERE name = '$id' ");
if ($q) {

    header("Location:addclassrooms.php");

} else {
    echo 'Error';
}