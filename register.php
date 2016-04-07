<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php

include('function.php');

$name=validate($_POST['name']);
$email=validate($_POST['email']);
$pass=validate($_POST['pass']);
$repass=validate($_POST['repass']);
$number=validate($_POST['number']);
$query4="select * from reg where Name like '$name' ";
$con4=con();
$res4=$con4->query($query4);

	while($arr=$res4->fetch_array()){
		if( $name==$arr['Name'])
		{   
		header('location:signup.php');
		}}
		
	if( $name!=$arr['Name'])
	{  echo '4';
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
		header("location:mainpage.php");
	}
	
}
else
{
	?>
    <a href="Registerhtml.html">Try Again</a>
    <?php
}
	
	
	}
?>

</body>
</html>