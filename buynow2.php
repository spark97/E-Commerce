<?php
session_start();
?>

<?php
include('function.php');
$id1=$_SESSION['id'];
$address=validate($_POST['address1']);
$query="UPDATE reg SET Address = '$address' where Customer_Id='$id1'";

$quer1="select * from reg where Customer_Id='$id1' ";
$con1=con();
$con=con();
$res=$con->query($query);
$res1=$con1->query($quer1);


	while($arr=$res1->fetch_array()){
		
			
			?>
<html>
        <link type="text/css" rel="stylesheet" href="buynow2.css"/>
		<link type="text/css" rel="stylesheet" href="main.css"/>
        <body>
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($_SESSION['id']))
echo "Welcome ".$arr['Name'] ;
else
echo "Welcome Guest" ;?>&nbsp;&nbsp;<img src="Images/avatar_2x.jpg" height="30" width="30"></p></div>
</header>
<hr>



<nav>
<ul>
	<li><a href="mainpage.php">Home</a></li>
	<li><a href="categories.php">Categories</a>
    <div class="submenu">
		<ul>
        	<div class="submenuitem"><li><a href="electronics.php">Electronics</a></li></div>
			<div class="submenuitem"><li><a href="fashion.php">Fashion & Lifestyle</a></li></div>
			<div class="submenuitem"><li><a href="books.php">Books</a></li></div>
			<div class="submenuitem"><li><a href="sports.php">Sports</a></li></div>

        </ul>
        </div>
	</li>
	<li><?php 
	if(isset($_SESSION['uname1']))
	{
	 ?>
<a href="logout.php">Logout</a><?php ;
	
	
	
	}
else {?>
<a href="signin.php">Sign In</a><?php ;}?></li>
	<li><a href="signup.php">Sign Up</a></li>
	<li><a href="customercare.php">Customer Care</a></li>
</ul>
</nav>
            
            <div class="container">
            
            
            
         <table  align="center" width="500px" height="550px" cellpadding="20px" name="<?php $arr['Customer_Id'] ?>">
         <tr><td colspan="2" align="center" class="congratulation"><p>Congratulations!! Your order has been confirmed.</p></td></tr>
         <tr>
        <th align="center">NAME:</th>
         <td class="name">
        <?php
	    echo $arr['Name'];
		?>
        </td>
        </tr>
        <tr>
        <th align="center">EMAIL:</th>
        <td class="email">
        <?php
	    echo $arr['Email_Id'];
		?>
        </td>
        </tr>
        
        <tr>
        <th align="center">CONTACT:</th>
        <td class="contact">
        <?php
	    echo $arr['Contact'];
		?>
        </td>
        </tr>
        
        <tr>
        <th align="center">ORDER ID:</th>
        <td class="orderid">
        <?php
	    echo $arr['Order_id'];
		?>
        </td>
        </tr>
       
         <tr>
         <th align="center">ADDRESS:</th>
         <td class="address" valign="top">
       <p> <?php
	    echo $arr['Address'];
		?></p>
        </td>
        </tr>
       
        
        
        
        <?php
	
}

	?>
    	<tr><th colspan="2" class="logoutbutton" align="center">
        <form action="logout.php" method="post">
        <button type="submit" value="logout">LOGOUT</button>
        </form></th></tr>
        
        </table>
        </div>
        <br style="clear:both">
        <footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>
      
   </html>