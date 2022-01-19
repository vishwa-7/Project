<?php

include 'connection.php';
if (isset($_POST['tobealloted'])) {
    $subject = $_POST['tobealloted'];
    $teacher = $_POST['toalloted'];
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "UPDATE course SET isalloted=1, alloted01='$teacher' WHERE c_id='$subject'");

if ($q) {
    $message = "Done.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:allotsubjects.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    $message = $subject;
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.html");

}

?>