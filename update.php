<?php
session_start();
include('function.php');
$b=$_SESSION['id'];
$id=validate($_GET['name']);
?>
<html>
<link rel="stylesheet" href="reg.css" type="text/css"/>
<link rel="stylesheet" href="main.css" type="text/css"/>
<div class="main">
        	<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p></header><hr>
            <div class="data">
           
      <div class="tablehead">
      	<table width="100%">
        <tr>
        <td align="center" width="2%">C.id</td>
        <td align="center" width="3%">O.id</td>
        <td align="center" width="15%">Name</td>
        <td align="center" width="20%">Email-Id</td>
        <td align="center" width="5%">Password</td>
        <td align="center" width="9%">Contact No.</td>
        <td align="center" width="35%">Address</td>
        <td align="center" width="10%">D</td>
        </tr>
        </table>
      </div>
<?php

$query="UPDATE reg SET Delivered = 'Y' where Customer_Id=$id";
	$con=con();
	$res=$con->query($query);
	$query1="select * from reg ";
	$con=con();
	$res=$con->query($query1);
	

if($res->num_rows==0)
{
echo "NO USER";
}
else
{   
    
	while($arr=$res->fetch_array()){
		?> 
        <table width="100%" name="<?php $arr['Customer_Id'] ?>" border="solid">
          
	     
        <tr>
        <td  class="customerid">
        <?php
		$a=$arr['Customer_Id'];
	    echo $a;
		?>
        </td>
         <td  class="orderid">
        <?php
		 
	     echo $arr['Order_id'];
		?>
        </td>
         <td  class="name">
        <?php
	    echo $arr['Name'];
		?>
        </td>
        <td  class="emailid">
        <?php
	    echo $arr['Email_Id'];
		?>
        </td>
        <td  class="password">
        <?php
	    echo $arr['Password'];
		?>
        </td>
        <td  class="contact">
        <?php
	    echo $arr['Contact'];
		?>
        </td>
       
         <td  class="address" valign="top">
       <?php
	    echo $arr['Address'];
		?>
        </td>
       
       
        <td class="delivered" align="center">
    <font color="#336600"><b><?php
	if($arr['Delivered']=='Y')
	{
		echo "DELIVERED";
	}
	else
	{
		?></b></font>
	<form action="update.php" method="get" name="update"> 
<input type="radio" name="<?php echo $a;?>" value="Y" align="middle"><font face="Comic Sans MS">YES</font><br>

<a href="update.php?name=<?php echo $a;?>" role="button"><font face="Comic Sans MS"> SAVE</font></a>
</form>
<?php
	}
	?>

</td>
        </tr>
        </table></div>
        <?php
	}
}

	?>
    
<!--<form action="update.php" method="post" name="update">
<label>Enter customer id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id"></label>
<button  name="delivered" value="Delivered?">CLick Here</button>
</form>-->
        
</div>
</div>
       
</html>