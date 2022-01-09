<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>

<!DOCTYPE html>
<html lang="en">
    <head>
     
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name = "viewport" content="width=device-width,initial-scale=1">
     <title>EXCEL</title>
     <meta charset="ISO-8859-1">
     <link rel="stylesheet" content="css/bootstrap.min.css">
     <link rel="stylesheet" href="styles.css">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,100;1,300;1,900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="css/all.css">
   
    </head>

<body>
    <section class= "header">
       <nav>
            <a href = "main.html"><img src="images/logo.png"></a>
            <div class = "nav-links" id="navLinks">
                <i class="fa fa-times-circle" onclick="hideMenu()"></i>

                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="login.jsp"> Login</a></li>
                    <li><a href="staff.html">Staff Login</a></li>
                    <li><a href="student.html">Student Login</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

         <div class="text">
             <h1>Excel Academy</h1>
                <p>
                    Ever to Excel!
              </p>
              <a href="visit.html" class="visit">Book a Visit</a>
        </div>



    </section>

<section class="course">
    <h1>Courses Offered </h1>


    <div class="row">
        <div class="course-col">
            <h2>Artificial Intelligence and Machine Learning</h2>
        </div>


        <div class="course-col">
            <h2>Computer Science and Engineering</h2>
        </div>

        <div class="course-col">
            <h2>Data Analysis Engineering</h2>
        </div>

    </div>
</section>

<section class="facilities">
    <h1>Our Facilities</h1>
    <p id="fac">Student will get the Best facilities from the Academy</p>
    <div class="row1">
    <div class="fac-col">
 
        <img src="images/edu.jpg">
        <p>World class Education</p>
    </div>

    <div class="fac-col">

        <img src="images/hostel.jpg">
        <p>Hostel</p>
    </div>

    <div class="fac-col">
     
        <img src="images/green.jpg">
        <p>Green Campus</p>
    </div>
</div>

  <div class="row2">
    <div class="fac-col">
       
        <img src="images/sport.jpg">
        <p>Sports</p>
    </div>

    <div class="fac-col">
        
        <img src="images/wifi.jpg">
        <p>Free Wi-fi</p>
    </div>

    <div class="fac-col">
                <img src="images/bus.jpg">
        <p>Transport</p>
    </div>

</div>
</section>
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>

</body>
</html>