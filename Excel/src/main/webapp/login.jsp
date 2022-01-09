<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="ISO-8859-1">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name = "viewport" content="width=device-width,initial-scale=1">
     <title>Login_Admin</title>
     
     <link rel="stylesheet" content="css/bootstrap.min.css">   
     <link rel ="stylesheet" href="styles_login.css">
</head>
<body>
	<div class="container">
	  <div class="boxouter">
	  	<div class="boxinner">
	    	<div class="boxfront">
	    		<h2>LOGIN ADMIN</h2>
	    		<form action="Login" method="post">
	    			<input type="email" class="input-box" placeholder="Enter email_id" name="uname" required>
	    			<input type="password" class="input-box" placeholder="Enter password" name="pass" required>
	    			<button type="Submit" class="submit-btn" value="login">Submit</button>
	    			<div class="cb"><input type="checkbox" name=""><span>Remember me</span></div>
	    		</form>

	    		<a class="fp" href="main.html">Forgot Password</a>
	    	</div>
	    </div>
	  </div>
</div>
  
  
</body>
</html>