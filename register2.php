<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php

function validate($a){
	$b=htmlentities($a);
	$c=trim($b);
	return $c;
}

$name=validate($_POST['name']);
$email=validate($_POST['email']);
$pass=validate($_POST['pass']);
$repass=validate($_POST['repass']);
$number=validate($_POST['number']);

if($pass==$repass)
{
	$dbhost="localhost";
	$dbuname="root";
	$dbpassword="12345";
	$con=new mysqli($dbhost,$dbuname,$dbpassword,$dbname="reg1");
		if($con->connect_errno)
	{
		die('Not Able to connect to database');
	}
	else
	{  
		$query="INSERT INTO reg (Name,Email_Id,Password,Contact) VALUES ('$name', '$email', '$pass', '$number')";
		$con->query($query);
		?>
        <?php
		header("location:signin.html");
		
		
	}
}
else
{
	?>
    <a href="Register2.html">Try Again</a>
    <?php
}
	

?>

</body>
</html>