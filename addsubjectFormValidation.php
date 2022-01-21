<?php

include 'connection.php';
if (isset($_POST['SubjectName']) && isset($_POST['SubjectCode']) && isset($_POST['SelectSem'])) {
    $name = $_POST['SubjectName'];
    $code = $_POST['SubjectCode'];
    $sem = $_POST['SelectSem'];
    $course = $_POST['SubjectType'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO subjects VALUES ('$code','$name','$course','$sem',0,'','','')");
if ($q) {
    $message = "Subject added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsubjects.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>