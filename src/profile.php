<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="over">
		<div class="left">
			
		</div>
		<div class="right">
			<div class="heading"><h1>Welcome </h1></div><?php echo $name;?>
			<div class="box">
				<div class="inputs">
					<span class="output">Your name is : </span><span class="output2"><?php echo $name; ?></span><br>
					<span class="output">Your Surname is : </span><span class="output2"><?php echo $surname; ?></span><br>
					<span class="output">Your Email addresss is : </span><span class="output2"><?php echo $email; ?></span><br>
					<span class="output">Your Mobile Number is : </span><span class="output2"><?php echo $number; ?></span><br>
					<span class="output">Your Age  is : </span><span class="output2"><?php echo $age; ?></span><br>
					<span class="output">Your Gender  is : </span><span class="output2"><?php echo $gender; ?></span>

				</div>
			</div>
		</div>
	</div>

	<?php
	
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{

		}


	?>
</body>
</html>