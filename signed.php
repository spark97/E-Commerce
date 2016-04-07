<?php

include('function.php');
$uname1=validate($_POST['uname1']);
$password1=validate($_POST['password1']);
$query="select * from reg where Name like '$uname1'";
$con=con();
$res=$con->query($query);
if($res->num_rows==0){
header ("location:signin2.php");
}
else
{?>
	
   
    
    
    <?php
	while($arr=$res->fetch_array()){
		if($arr['Password']==$password1)
		{session_start();
	
		 $_SESSION['uname1']=$uname1;
        $_SESSION['password1']=$password1;
		$_SESSION['id']=$arr['Customer_Id'];
		?>
		
        <?php
			header("location:mainpage.php");
		
		
			
		}
		else
		header("location:signin2.php");
	}
}


?>