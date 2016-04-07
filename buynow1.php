<?php
session_start();
$iid=$_SESSION['itemid'];
session_destroy();
?>
<?php
include('function.php');
$uname=validate($_POST['username']);
$password=validate($_POST['passwd']);

$query="select * from reg where Name like '$uname' ";
$con=con();
$res=$con->query($query);
	while($arr=$res->fetch_array()){
		if($arr['Password']==$password)
		{ 
		 $id=$arr['Customer_Id'];
			    session_start();
			$_SESSION['id']=$id;
			echo "WELCOME";
			$a="$iid"."$id";
			$quer3="UPDATE reg SET Order_id = '$a' where Customer_Id='$id'";
$con1=con();
$res1=$con1->query($quer3);
			?>
            
         <table name="<?php $arr['Customer_Id'] ?>" border="solid">
          
	     
        <tr>
       
         <td width="400px">
        <?php
	    echo $arr['Name'];
		?>
        </td>
        <td width="350px">
        <?php
	    echo $arr['Email_Id'];
		?>
        </td>
        
        <td width="100px">
        <?php
	    echo $arr['Contact'];
		?>
        </td>
       
        
        
        </tr>
        </table>
        <form action="buynow2.php" method="post" name="address">
<label>Address<textarea rows="5" name="address"></label>
<button type="submit" name="submit" value="Submit">CLick Here</button>
</form>
        <?php
	}
	else
	{
		echo "INVALID PASSWORD ";
	}
}

	?>
   

			
		
           <?php
		
		
			?>

</html>