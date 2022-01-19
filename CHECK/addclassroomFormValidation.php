<?php
include 'connection.php';
if (isset($_POST['name'])&&isset($_POST['status'])) {
    $name =$_POST['name'];
    $status = $_POST['status'];

} else {
    $message = "NOT SUCCESSFUL";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$sql = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "INSERT INTO class VALUES ('$name','$status')");
if ($sql) {
    $message = "Class added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addclassrooms.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>