<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('function.php');
$name=validate($_POST['name']);
$password=validate($_POST['password']);
$query="select * from admin where username like '$name'";
$con=con();
$res=$con->query($query);
if($res->num_rows==0){
echo "Invalid Username";
}
else
{
	while($arr=$res->fetch_array()){
		if($arr['Password']==$password)
		{
		
			header ("location:./reg.php")
;			
		
			
		}
		else
		{ 
		   
		   ?>
           <a href="loginpage.html">CLick here to try again</a>
           <?php
		}
		}}
			?>

</body>
</html>