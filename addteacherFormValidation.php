<?php

include 'connection.php';
if (isset($_POST['TeacherName']) && isset($_POST['TeacherId']) && isset($_POST['Designation']) && isset($_POST['Alias'])) {
    $name = $_POST['TeacherName'];
    $facno = $_POST['TeacherId'];
    $designation = $_POST['Designation'];
    $alias = $_POST['Alias'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation')");
$sql = "CREATE TABLE " . $facno . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
}
if ($q) {
    $message = "Teacher added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addteachers.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    //in main

}

?>