<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
	
	$conn = new mysqli('localhost','root','','ttms');
	if(!$conn){
		
		die("Connection Failed : ".mysqli_error($con));
	} 
    else {
		$query= "SELECT * from admin where name ='$username' and password='$password'";
		$result = mysqli_query( $conn, $query);
        if(mysqli_num_rows($result)== 1){
            session_start();
            $_SESSION['auth']= 'true';
            header('location:timetable.html');
        }
        else{
            echo "wrong username or password";
        }
    }

?>