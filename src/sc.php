 <?php
 session_start();
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
	
	
		
		
		if(isset($_POST["login"]))
		{     

        $email = mysqli_real_escape_string($conn,$_POST['email']); 
        $password = mysqli_real_escape_string($conn,$_POST['pass']); 
        $password=md5($password);

        $sql="SELECT * FROM userdata WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1)
        {
        	$_SESSION['message']="You are successfully logged in";
        	$_SESSION['email']=$email;
        	header("location: crp.php");
        }
        else
        {
        	$_SESSION['message']="Username/password combinations are incorrect";
        }
}
	
	
?>