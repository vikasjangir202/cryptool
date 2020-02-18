<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
	<style type="text/css">
		*{margin: 0px;padding: 0px;box-sizing: border-box;}
		body{font-family: 'Sulphur Point', sans-serif;
}
		.container{width: 100%;float: left;}
		img{width: 100%;height: 100vh;background-position: center;background-size: cover;position: absolute;}
		.box{width: 50%;float: left;position: relative;top: 50%;left: 50%;
transform: translate(-50%,30%);border:1px solid yellow;
text-align: center; border-radius: 10px;height: 350px;}
h1{color: white;}
span{color: black	;font-size: 20px;}
.box2{width: 80%;margin:70px auto 20px auto;height: 200px;background-color: white;border:2px solid yellow;border-radius: 5px;}
.bt{ background:#FE0B0D; font-size: 20px; border: 1px solid #FE0B0D;
border-radius: 5px; cursor: pointer; padding: 5px;color: white;
margin: 10px;}
.bt:hover{background: none;color: black;}

	</style>
</head>
<body>


	<?php

$result=$enc=$dec=$cryp=$decryp=$msg="";
		 if(isset($_POST['enc']))
		 {
		 	$msg=$_POST['msg'];
		 	$enc=base64_encode($msg);
		 	$cryp="Your message is Encrypted succesfully";


		 	
		 }
		 elseif(isset($_POST['dec']))
		 {
		 	$msg=$_POST['msg'];
		 	$dec= base64_decode($msg);
		 	$decryp="Your message is Decrypted succesfully";
		 }
		 elseif (isset($_POST['data'])) {
	
		 	$servername="localhost";
	$username="root";
	$password="";
	$dbname="crp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection faild : ".mysqli_connect_error());
	}
	$sql= "SELECT * FROM tool";
	$result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) 
       {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
       echo "Original Message :- " . $row["message"]. "Encryp/Decryp Code :-  ". $row["result"].  "<br>";
          }
          } 
          else
           {
    echo "0 results found";
          }

mysqli_close($conn);

		 }
		
		 
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="crp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection faild : ".mysqli_connect_error());
	}
	$msg=$msg;
	$result=$dec;
	$result=$enc;
	


	$sql= "INSERT INTO tool(message,result)
	VALUES('$msg','$result')";

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

	<div class="container">
		
		<img src="background.jpg">
		<div class="box">
			<div class="content">
				<h1>Message Cryptography Tool</h1>
				<div class="box2">
						<form action="vmail.php" method="post">
					<span><?php echo $cryp; echo $decryp;?></span>
					 
					 <p>Original Text </p>
					 <input type="text" name="org" value="<?php echo $_POST['msg'];?>">
					 <p> Result  </p>
					 <input type="text" name="result" value="<?php echo $enc; echo $dec  ?>"><br>
					 <span>Send Encrypted/Decrypted value Using mail</span><br>
					 <input type="submit" class="bt" name="sub"  value="Mail">



					</form>
				</div>


			</div>
		</div>
	</div>

	

	

</body>
</html>