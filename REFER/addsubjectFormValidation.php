<?php
include 'connection.php';
if (isset($_POST['c_id']) && isset($_POST['c_name']) && isset($_POST['c_id']) && isset($_POST['semester'])) {
    $c_name = $_POST['c_name'];
    $semester = $_POST['semester'];
    $c_id = $_POST['c_id'];
} else {
    $message = "NOT SUCCESSFULL";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$sql = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "INSERT INTO course VALUES ('$c_id','$c_name','$semester',0,'','','')");
if ($sql) {
    $message = "Subject added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsubjects.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
   
    

}
?>