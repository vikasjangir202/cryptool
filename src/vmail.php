<?php    
$to_email=$subject=$message=$headers=$error=$ms="";
function clean_text($string)
{
	$string=trim($string);
	$string=stripslashes($string);
	$string=htmlspecialchars($string);
	return $string;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	

	if(empty($_POST["to"]))
	{
		$error="required field";

	}
	else {
		$to_email=clean_text($_POST["to"]);
	}
	if(empty($_POST["subject"]))
	{
		$error="required field";

	}
	else {
		$subject=clean_text($_POST["subject"]);
	}
	if(empty($_POST["msg"]))
	{
		$error="required field";

	}
	else {
		$message=clean_text($_POST["msg"]);
	}
	if(empty($_POST["from"]))
	{
		$error="required field";

	}
	else {
		$headers="From:".clean_text($_POST["from"]);
	}
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST['sub']))
		{
	$ms=$_POST['result'];
}
}
	//$to_email = 'vikasjangir202@gmail.com';
//$subject = 'Testing PHP Mail';
//$message = 'This mail is sent using the PHP mail function';
//$headers = 'From: vikasjangir202@gmail.com';

	if(isset($_POST['submit']))
	{
$send=mail($to_email,$subject,$message,$headers);

if($send==true)
{
echo "mail sent successfully";
}
else
{
	echo "mail did not sent";
}
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Gmail</title>
	<link rel="stylesheet" type="text/css" href="vmail.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300i,400,400i,500,500i,700&display=swap" rel="stylesheet">

</head>
<body>



	
	<div class="full">
		<div class="center">
			<div class="box">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="left">
						
						<span class="tt">To</span>
						<span class="tt">From</span>
						<span class="tt">Subject</span>
						<span class="tt">Message</span>
					</div>
					<div class="right">

					<input type="text" name="to" value="<?php echo $to_email?>" >*<?php echo $error ?><br>
					<input type="text" name="from" value="<?php echo $headers?>"  >*<?php echo $error ?><br>
					<input type="text" name="subject" value="<?php echo $subject?>">*<?php echo $error ?><br>
					<textarea rows="10" cols="30" name="msg" >Encerypted/Decrypted Code : <?php echo $ms;  ?> </textarea><br>
					<input type="submit" class="send" 
					name="submit" value="SEND ">


				</form>
			</div>
		</div>
	</div>



	
</body>
</html>