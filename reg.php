<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="reg.css" type="text/css"/>
</head>
<div class="main">
        	
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
include('function.php');
$query="select * from reg ";
$con=con();
$res=$con->query($query);
if($res->num_rows==0){
echo "NO USER";
}
else
{   
     $a=0;
	while($arr=$res->fetch_array()){
		?>
        
        
        <table width="100%" name="<?php $arr['Customer_Id'] ?>" border="solid">
          <?php
	     ?>
        <tr>
        <td  class="customerid">
        <?php
		$a=$arr['Customer_Id'];
		$_SESSION['id']=$a;
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
        <td class="contact">
        <?php
	    echo $arr['Contact'];
		?>
        </td>
       
         <td  class="address">
        <?php
	    echo $arr['Address'];
		?>
        </td>
       
         <td  class="delivered">
      <font color="#336600"><b>  <?php
	if($arr['Delivered']=='Y')
	{
		echo "DELIVERED";
	}
	else
	{
		?></b></font>
	<form action="update.php" method="get" name="update"> 
<input type="radio" name="<?php echo $a;?>" value="Y" align="middle"><font face="Comic Sans MS">YES</font>
<br>
<a href="update.php?name=<?php echo $a;?>" role="button"><font face="Comic Sans MS">SAVE</font></a>
</form>
<?php
	}
	?>

</td>
        </td>
        
        </tr>
        </table>
        </div>
		
        <?php
		}
		
}
?>
<div class="form">


<!--<form action="update.php" method="post" name="update">
<label>Enter customer id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id"></label>
<button  name="delivered" value="delivered?">Click Here</button>
</form>
-->
</div>
</div>
<body>
</body>
</html>