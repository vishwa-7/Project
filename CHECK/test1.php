<?php
include 'connection.php';
if(isset($_POST['Submit']))
{
 
    $g_name = $_POST['name'];
    $phno = $_POST['number'];
    $email = $_POST['email'];
    $topic = $_POST['message'];
    $sql= "insert into guest(`g_id`, `g_name`, `topic`, `phno`) values('$email', '$g_name', '$topic', '$phno')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($con);
}
?>