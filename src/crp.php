<?php
	include('server.php');
?>
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

	


	<div class="container">
		<img src="">
		<img src="background.jpg">
		<div class="box">
			<div class="content">
				<h1>Message Cryptography Tool</h1>
				
				<?php if(isset($_SESSION['success'])): ?>
					<div class="errsc">
						<h3>
							<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
							?>
						</h3>
					</div>
				<?php endif ?>
				<?php if(isset($_SESSION['username'])): ?>
					<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
					<a href="home.php?logout='1'">Logout</a>
				<?php endif ?>

				<p>Message</p><span>*</span>
				<form action="result.php" method="post" >
				<input type="text"  name="msg" placeholder="Write message here..." required="" class="btt">
				<br>
				<input type="submit" name="enc" class="bt" value="Encrypt">
				<input type="submit" name="dec" class="bt" value="Decrypt">
				<br>
				<input type="submit" name="data" class="bt" value="Show previous data">
			</form>
			


			</div>
		</div>
	</div>

	


</body>
</html>