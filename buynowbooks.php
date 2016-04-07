<?php
session_start();
$itemid=$_SESSION['itemid'];
?>
<html> 
<head>
<meta charset="utf-8">
 

<link type="text/css" rel="stylesheet" href="buynowbooks.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>

</head>


<?php
include('function.php');
$uname=$_SESSION['uname1'];
$password=$_SESSION['password1'];

$query7="select * from books where itemid like '$itemid' ";
$con7=con();
$res7=$con7->query($query7);
$query="select * from reg where Name like '$uname' ";
$con=con();
$res=$con->query($query);
while($ar=$res7->fetch_array()){
		$_SESSION['itemid']=$itemid;
	while($arr=$res->fetch_array()){
		
		 $id=$arr['Customer_Id'];
			    
			$_SESSION['id']=$id;
			
			$a="$itemid"."$id";
			$quer3="UPDATE reg SET Order_id = '$a' where Customer_Id='$id'";
$con1=con();
$res1=$con1->query($quer3);
			?>

<title><?php echo $ar['name'];?></title>
<body>
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($uname))
echo "Welcome"." $uname" ;
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



<div class="main_div">
		<div class="leftsidebar">
		<ul>
			<li><a href="electronics.php">Electronics</a></li>
			<li><a href="fashion.php">Fashion & Lifestyle</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="sports.php">Sports</a></li>
		</ul>
		</div>
    
	<div class="info">
    
   		
    	<header class="infoname">
        <font size="+3" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?php echo $ar['name'];?></font>
        </header>
        
        
        
        <div class="infoimg"><img src="<?php echo $ar['image'];?>" width="200px" height="250px"></div>
        
        <div class="productinfo" style="font-family:Comic Sans MS">
        	<table width="100%">
            
           <tr><td style="padding:20px; text-decoration:underline"><font size="+2"><b>KEY FEATURES</b></font></td></tr>
            
            <tr><td>
            <ul>
            	<li>Author: <?php echo $ar['author']; ?></li>
                <li>Publisher:&nbsp;<?php echo $ar['publisher'];?></li>
               <li>Publication Year:&nbsp;<?php echo $ar['Publicationyear']; ?></li>
                <li>Price:&nbsp;&#8377 <?php echo $ar['price']; ?></li>
            </ul>
            </td></tr>
            </div>

		</table>
         <div class="buyerinfo">
        
        <table width="50%" class="usertable">
        	
            <tr><th align="right">Contact No.:</td><td><?php
	    echo $arr['Contact'];
		?></td></tr>
			<tr><th align="right">Delivery Address:</td><td><form action="buynow2.php" method="post" name="address">
			<textarea rows="5" name="address1"  required></textarea></td>
            <tr><td colspan="2" align="center">
			<button type="submit" name="submit" value="Submit">Confirm</button></form>
		  </td></tr>
			
        </table>
        
        </div>
        
     
    </div>
    
    
        <?php
	
	
}
}
	?>

</div>
<br style="clear:both">

<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>

</body>
</html>
