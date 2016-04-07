<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('function.php');
if(isset($_POST['uname']))
{
$uname=validate($_POST['uname']);
}
if(isset($_POST['passwd']))
{
$passwd=validate($_POST['passwd']);
}
?>
<a href="loginpage.html">Click here</a>

</body>
</html>