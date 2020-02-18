<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
		.right a:hover{background-color: skyblue;color:black;}
		.img img{width: 100%;background-size: cover;background-position: center; height: 100vh;}
		.right{width: 50%;position: absolute;top: 50%;
			left: 50%;transform: translate(-50%,50%);text-align: center;border: 2px solid white;padding: 20px;
			border-radius: 10px;}
			.sub{margin: 20px;}
	</style>
</head>
<body>
	<div class="over">
		<div class="img">
		<img src="bg2.jpg">
	</div>
	
	  <div class="main">
		 
	    <div class="right">
	    	<?php include('errors.php'); ?>
		  	<form method="post" action="login.php">
		  		<input type="text"  class="input" name="email" placeholder="E-mail">*<br>
		  		<input type="password" class="input" name="pass" placeholder="Password">*<br>
		  		<input type="submit" class="sub" name="login"  value="Log In"><br>
		  		<span>New User ? <a href="signup.php">Register here</a></span>
		  	</form>
			
		 </div>
	  </div>
    </div>


   

</body>
</html>