<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Resigter page</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<style type="text/css">
		.main .right{}
		.main .right .err{color: red;}
		.main .right{margin-top: 50px;}
		.img img{height: 100vh;}
		.right{ position: absolute;top: 50%;left: 50%;
			transform: translate(-50%,3%);
			float: left;border:2px solid white;
			padding: 10px;border-radius: 10px;}
	</style>
</head>
<body>



	<div class="over">
		<div class="img">
		<img src="bg2.jpg">
	</div>
	
	  <div class="main">
		
	    <div class="right">
		  	<form method="post" action="signup.php">
		  		<span class="err">* Required Fields</span><br>
		  		<?php include('errors.php'); ?>
		  		<input type="text"  class="input" name="name" placeholder="Name" value="<?php echo $name;?>" ><span class="err">*</span>
		  		<br>
		  		<input type="text"  class="input" name="surname" placeholder="Surname" value="<?php echo $surname;?>"><span class="err">*</span><br>

		  		<input type="text"  class="input" name="email" placeholder="E-mail" value="<?php echo $email;?>"><span class="err">*</span><br>

		  		<input type="number"  class="input" name="number" placeholder="Mobile " value="<?php echo $number;?>"><span class="err">*</span><br>
		  		<input type="password"  class="input" name="password" placeholder="Password"><span class="err">*</span><br>

		  		<input type="password"  class="input" name="pass2" placeholder="Confirm Password"><span class="err">*</span><br>
		  		<input type="number"  class="input" name="age" placeholder="Age" value="<?php echo $age;?>"><span class="err">*</span><br>

		  		
		  		<span class="select">Select Gender : </span>
		  		<input type="radio"  class="input" name="gender" value="M"><span>Male</span>
		  		<input type="radio"  class="input" name="gender" value="F"><span>Female</span>
		  		<span class="err">*</span><br>
		  		<input type="submit" class="sub" name="reg" value="Register">



		  	</form>

		 <span>Already have an account ? <a href="login.php">Login here.</a></span>
			
		 </div>
	  </div>
    </div>



</body>
</html>