<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html>
<head>
	<title>Cryptography</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.rs{font-size: 20px;color: white;border: 1px solid #FE0B0D;padding: 5px; }
		.btt{background:white; font-size: 20px; border: 1px solid #FE0B0D;
border-radius: 5px;  padding: 5px;color:#FE0B0D ;
margin: 10px;}
.bt{ background:#FE0B0D; font-size: 20px; border: 1px solid #FE0B0D;
border-radius: 5px; cursor: pointer; padding: 5px;color: white;
margin: 10px;}
.bt:hover{background: none;color: white;}

	</style>
</head>
<body>
<?php
	
	
$result=$enc=$dec="";
		 if(isset($_POST['enc']))
		 {
		 	$msg=$_POST['msg'];
		 	$enc=base64_encode($msg);

		 	
		 }
		 elseif(isset($_POST['dec']))
		 {
		 	$msg=$_POST['msg'];
		 	$dec= base64_decode($msg);
		 }
		 
		 

	?>

	


	<div class="container">
		<img src="">
		<img src="background.jpg">
		<div class="box">
			<div class="content">
				<h1>Message Cryptography Tool</h1>
				<p>Message</p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="text" name="msg" placeholder="Write message here..." required="" class="btt" >
				<br>
				<input type="submit" class="bt" name="enc" value="Encrypt">
				<input type="submit" class="bt" name="dec" value="Decrypt"><br>
				<p>Result :</p> <input type="text" id="myInput" class="btt"name="result" value="<?php echo $enc;?><?php echo $dec;?>"> <br>
				<button onclick="myFunction()" class="bt">Copy to clipboard</button><br>
				<p>& Send message via</p><a  href="vmail.php"> Vmail</a>
			</form>



			</div>
		</div>
	</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  
}
</script>

</body>
</html>