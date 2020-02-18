<?php 
	session_start();
	$errors=array();
	$name=$surname=$email=$number=$pass=$pass2=$age=$gender=$logpass=$logmail="";

$servername="localhost";
	$username="root";
	$password="";
	$dbname="crp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection faild : ".mysqli_connect_error());
	}
	

	if(isset($_POST['reg']))
	{
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$surname=mysqli_real_escape_string($conn,$_POST['surname']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$number=mysqli_real_escape_string($conn,$_POST['number']);
		$pass=mysqli_real_escape_string($conn,$_POST['password']);
		$pass2=mysqli_real_escape_string($conn,$_POST['pass2']);
		$age=mysqli_real_escape_string($conn,$_POST['age']);
		$gender=mysqli_real_escape_string($conn,$_POST['gender']);

		if(empty($name))
		{
			array_push($errors, "Name is required");
		}
		

		if(empty($surname))
		{
			array_push($errors, "Surname is required");
		}
		

		if(empty($email))
		{
			array_push($errors, "Email is required");
		}
		

		if(empty($pass))
		{
			array_push($errors, "Password is required");
		}
		if($pass != $pass2)
		{
			array_push($errors, "Password did not match");
		}

		if(empty($age))
		{
			array_push($errors, "Age is required");
		}

		if(empty($gender))
		{
			array_push($errors, "Gender is required");
		}
		
		if(empty($number))
		{
			array_push($errors, "Number is required");
		}
		
		if(count($errors)==0)
		{
			$pass=md5($pass);

	$sql= "INSERT INTO userdata(name,surname,email,mobile,password,age,gender)
	VALUES('$name','$surname','$email','$number','$pass','$age','$gender')";
	mysqli_query($conn,$sql);

	$_SESSION['username']=$name;
	$_SESSION['success']="You`re successfully logged in.";
	header('location: crp.php');
	
}
	
}

	if(isset($_POST['login']))
	{
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$logpass=mysqli_real_escape_string($conn,$_POST['pass']);
		echo $logpass;

		if(empty($email))
		{
			array_push($errors, "Email is required");
		}
		if(empty($logpass))
		{
			array_push($errors, "Password is required");

		}
		if(count($errors)==0)
		{
			$logpass=md5($logpass);
			echo $logpass;
			$query="SELECT * FROM userdata WHERE email='$email' AND password='$logpass'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)==1)
			{
				$_SESSION['username']=$email;
				$_SESSION['success']="You are now logged in";
				header('location:crp.php');
			}
			else
			{
				array_push($errors, "Invalid email and password");

			}
		}
	}


	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: home.php');
	}


	?>