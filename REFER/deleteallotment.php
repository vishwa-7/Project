<?php

include 'connection.php';
$id = $_GET['s_name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
    "UPDATE course  SET isalloted = '0' , alloted01 = '',alloted02 = '',alloted03 = '' WHERE c_id = '$id' ");
if ($q) {

    header("Location:allotsubjects.php");

} else {
    echo 'Error';
}