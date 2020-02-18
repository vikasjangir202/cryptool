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
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300i,400,400i,500,500i,700&display=swap" rel="stylesheet">
	<style type="text/css">
		*{padding: 0px;margin: 0px;box-sizing: border-box;font-family: 'Ubuntu', sans-serif;}
.full{width: 100%;background: url(background1.jpg);background-size:cover;height: 100vh;}
 .full .center{ width: 100%; float: left; margin: auto;}

    span{font-size: 20px;}
	</style>
</head>
<body>
	<div class="full">
		<div class="center">
			
				<span>Mail Sent Successfully</span><br>
				<span>Check your inbox</span><br>
				<span> Goto <a href="www.gmail.com">Gmail</a></span>

				
		</div>
	</div>


</body>
</html>