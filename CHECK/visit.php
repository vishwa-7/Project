<?php
include 'connection.php';
if(isset($_POST['Submit']))
{
 
    $g_name = $_POST['name'];
    $phno = $_POST['number'];
    $email = $_POST['email'];
    $topic = $_POST['message'];
    $sql= "insert into `guest`(`g_id`, `g_name`, `topic`, `phno`) VALUES ('$email', '$g_name', '$topic', '$phno')";
    if(mysqli_query($con,$sql)){
        echo '<script type="text/javascript">';
        echo 'alert("Your registration is Successful.");';
        echo 'window.location.href="main.php";';
        echo '</script>';
    }   
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset = "UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name = "viewport" content="width=device-width,initial-scale=1">
     <title>Register</title>      
     <link rel="stylesheet" content="css/bootstrap.min.css">
     <link rel="stylesheet" href="visit_styles.css">

     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,100;1,300;1,900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="css/all.css">
   
   
</head>
<body>
     <div class="container">
          <h2>Register For Class</h2>
          <form action="visit.php" method="POST">
               <div class="inpname">
                     <input type="text" name="name" required>
                    <label for="name"><i class="fa fa-user" aria-hidden="true"></i>
                         Your Name</label>
                </div>
                <div class="inpname">
                     <input type="number" name="number" required>
                    <label for="number">
                    <i class="fa fa-phone" aria-hidden="true"></i> Phone no.</label>
                </div>
                <div class="inpname">
                     <input type="text" name="email" required>
                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Your Email Id</label>
                </div>
                <div class="inpname">
                     <textarea name="message" rows="8"></textarea>
                    <label for="message"><i class="fa fa-wrench" aria-hidden="true"></i> Your Topic To Teach</label>
                </div>
                <button type="Submit" name="Submit">SUBMIT <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <button type="visit" class="time"> 
                    <a href="veiwtimetable.php">Veiw The Time-Table </a><i class="fa fa-eye" aria-hidden="true"></i>
               </button>
          </form>
     </div>
</body>
</html>