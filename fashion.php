<?php
session_start();
?>
<?php
include('function.php');
if(isset($_SESSION['uname1']))
{
$uname1=$_SESSION['uname1'];
$query4="select * from reg where Name like '$uname1' ";
$con4=con();
$res4=$con4->query($query4);
if($res4->num_rows==0){
header("location:signin2.php");
} 
	while($arr=$res4->fetch_array()){
		
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		
	}
}
			?>
<html>
<head>
<meta charset="utf-8">
<title>Fashion & Lifestyle</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="stylesheet" href="fashion.css" type="text/css"/>
</head>

<body>
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($_SESSION['uname1']))
echo "Welcome"." $name" ;
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

<div class="main">
<header class="header1">
<div class="headertitle">FASHION & LIFESTYLE</div>
</header>
		
		<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="fashionbutton.php?id=F1$" role="button"><img src="Images/IMG_1426687564367.jpeg" width="150" height="250"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Denim Jeans</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.2,399</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="fashionbutton.php?id=F2$" role="button">
                    <img src="Images/20150310-162927-poe-p1.jpg" width="150" height="250"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Pan America Shirts</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.369</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center"width="100%">
                	<tr><td align="center"><form  method="post"><a  href="fashionbutton.php?id=F3$" role="button"><img src="Images/IMG_1426687234620.jpeg" width="130" height="250"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Lakme Lipstick</</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.999</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="fashionbutton.php?id=F4$" role="button"><img src="Images/IMG_1426687708460.jpeg"width="200" height="250"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">RayBen Sunglasses</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.800</b></font></td></tr>
                </table>
            </td>
            
            
        </tr>
        
        
    </table>


</div>

</div>


</body>
</html>
