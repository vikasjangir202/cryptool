
<link rel="stylesheet" type="text/css" href="https://fontawesome.com/icons/home?style=solid">
<!DOCTYPE html>
<html>
<head>
	<title>Cryptography Tool</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="container">
		<img src="bg1.jpg">
		<div class="nav">
			<ul>
				<li class="home"><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
				<li><a href="use.php"><i class="fas fa-pencil-ruler"></i>How to use</a></li>
				<li ><a href="about.php"><i class="fas fa-address-card"></i>About Cryptography</a></li>
				<li><a href="credit.php"><i class="fas fa-american-sign-language-interpreting"></i>Credits</a></li>

			</ul>
		</div>
		<div class="box">
			<div class="heading">
				
				<h1><i class="fas fa-key"></i>Welcome to Cryptography Tool <i class="fas fa-key"></i></h1>
			</div>
			<div class="content">
				<h2>To Get Started Please</h2>
				<a href="login.php">Login</a><br>
				<h2>Or</h2>
				<a href="signup.php">Sign Up</a>
				<?php 
				$handle = fopen("counter.txt", "r"); 
				if(!$handle)
					{
					 echo "could not open the file" ;
					  } 
					  else
					   { 
					   	$counter = ( int ) fread ($handle,20) ; 
					   	fclose ($handle) ; 
					   	$counter++ ; 
					   	
					   	 $handle = fopen("counter.txt", "w" ) ;
					   	 fwrite($handle,$counter) ; 
					   	 fclose ($handle) ; } ?>


				<button>Visitor Number = <?php echo $counter;?></button>


			</div>
		</div>
	</div>

</body>
</html>