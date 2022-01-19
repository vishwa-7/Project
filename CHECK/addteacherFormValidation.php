<?php

include 'connection.php';
if (isset($_POST['s_id']) && isset($_POST['s_name'])&& isset($_POST['adv_id']) && isset($_POST['alias'])) {
    $s_name = $_POST['s_name'];
    $s_id= $_POST['s_id'];
    $adv_id=$_POST['adv_id'];
    $alias = $_POST['alias'];
    
} else {
    $message = "NOT SUCCESSFUL";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "INSERT INTO staff VALUES ('$s_id','$s_name','$alias','$adv_id','')");
$sql = "CREATE TABLE " . $s_id . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $s_id . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), $sql);
}
if ($q) {
    $message = "STAFF ADDED.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addteachers.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>