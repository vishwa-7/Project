<?php
include 'connection.php';
if (isset($_POST['section'])&&isset($_POST['year'])) {
    $section =$_POST['section'];
    $year = $_POST['year'];

} else {
    $message = "NOT SUCCESSFUL";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$sql = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "INSERT INTO class VALUES ('$section','$year')");
if ($sql) {
    $message = "Class added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addclassrooms.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>