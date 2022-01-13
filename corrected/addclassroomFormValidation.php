<?php
include 'connection.php';
if (isset($_POST['classroom'])) {
    $name = $_POST['classroom'];

} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$sql = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO classrooms VALUES ('$name',0)");
if ($sql) {
    $message = "Classroom added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addclassrooms.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>