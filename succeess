 <?php
$email=$password="";

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="crp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection faild : ".mysqli_connect_error());
	}
	
	
		$email=$_POST["email"];
		$password=$_POST["pass"];
		
		$result=mysql_query("SELECT * FROM userdata WHERE email='$email' AND password='$password'") OR die("faild to query database".mysql_error());
		$row=mysql_fetch_array($result);
		if($row['email']==$email && $row['password']==$password)
		{
			echo "login successfully";
		}
	
		else {
			echo "You have enetered wrong password";
			
		}
	
	
	
?>