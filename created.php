<!DOCTYPE html>
<html>
<head>
	<title>Account created successsfully</title>
	<link rel="stylesheet" type="text/css" href="created.css">
</head>
<body>
	<div class="over">
		<div class="left">
		 </div>
		 <div class="right">
		 	<div class="box">
		 	<h1>Account created successfully</h1>
		 	<span>Go to <a href="login.php">Login page</a></span>
		 </div>
	</div>
	


	<!-- PHP code -->
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="reg";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection faild : ".mysqli_connect_error());
	}
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$email=$_POST["email"];
	$mobile=$_POST["number"];
	$password=$_POST["password"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];


	$sql= "INSERT INTO userdata(name,surname,email,mobile,password,age,gender)
	VALUES('$name','$surname','$email','$mobile','$password','$age','$gender')";

	if($conn->query($sql)==true)
	{
		echo "New record created successfully";

	}
	else
	{
		echo "Error : ".$sql."<br>".$conn->error;
	}
	mysqli_close($conn);
?>

</body>
</html>