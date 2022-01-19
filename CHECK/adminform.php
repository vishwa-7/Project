<?php
include 'connection.php';
if (isset($_POST['a_id']) && isset($_POST['a_pass'])) {
    $a_id = $_POST['a_id'];
    $a_pass = $_POST['a_pass'];
} else {
    die();
}
$sql= mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "SELECT name FROM admin WHERE name = '$a_id' and password = '$a_pass' ");
if (mysqli_num_rows($sql) == 1) {
    echo 'WELCOME ADMIN';
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>