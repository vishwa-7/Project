<?php

session_start();
include 'connection.php';
if (isset($_POST[''])) {
    $fac = $_POST['FN'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "SELECT s_name FROM staff WHERE s_id = '$fac'");
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    $_SESSION['loggedin_name'] = $row['s_name'];
    $_SESSION['loggedin_id'] = $fac;
    header("Location:facultypage.php");
} else {
    $message = "Username incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    echo 'welcome ' . $row['s_name'];
} else {
    $message = "Invalid Faculty Number.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>