	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	
	
	<?php    
$to_email=$subject=$message=$headers=$error="";
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



//$to_email = 'vikasjangir202@gmail.com';
//$subject = 'Testing PHP Mail';
//$message = 'This mail is sent using the PHP mail function';
//$headers = 'From: vikasjangir202@gmail.com';
	if(isset($_POST['submi']))
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

<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>Your message is encrypted successfully</p>
<p>Do you want to send the message to the specified email
	<input type="submit" name="submi" value="Confirm">
	<a href="vmail.php">Go back to Vmail</a>
</form>
</body>
	</html>

	





