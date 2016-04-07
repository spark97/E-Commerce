<?php
session_start();
include('function.php');
$itemid=$_SESSION['itemid'];
$query7="select * from books where itemid like '$itemid' ";
$con7=con();
$res7=$con7->query($query7);

while($arr=$res7->fetch_array()){
		$_SESSION['itemid']=$itemid;
					?>
<html>
<head>
<meta charset="utf-8">

<link type="text/css" rel="stylesheet" href="buynowbooks.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aladin:n4:default.js" type="text/javascript"></script>
</head>

<body>
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($_SESSION['uname1']))
	{$uname1=$_SESSION['uname1'];
echo "Welcome ". "$uname1" ;}
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
        <font size="+3" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?php echo $arr['name']; ?></font>
        </header><title><?php echo $arr['name'];?></title>

        
        <div class="infoimg"><img src="<?php echo $arr['image'];?>" width="200px" height="250px"></div>
        
        <div class="productinfo" style="font-family:Comic Sans MS">
        	<table width="100%">
            
           <tr><td style="padding:20px; text-decoration:underline"><font size="+2"><b>KEY FEATURES</b></font></td></tr>
            
            <tr><td>
            <ul>
            	<li>Author: <?php echo $arr['author']; ?></li>
                <li>Publisher:&nbsp;<?php echo $arr['publisher'];?></li>
               <li>Publication Year:&nbsp;<?php echo $arr['Publicationyear']; ?></li>
                <li>Price:&nbsp;&#8377 <?php echo $arr['price']; ?></li>
            </ul>
            </td></tr>
<tr><td align="center">
<?php
 $id1= $arr['itemid'];
if(!isset($_SESSION['uname1']))
{
	?>
<form method="get" action="itemid.php" name="BUT_NOW1"><!--<button type="submit" value="" name="BUY_NOW1" class="buynow">BUY NOW-->
<tr><td align="center"><a href="itemid.php?id=<?php echo $id1;?>"><img src="Images/buynow.png.jpeg"  width="140px" height="68px"></a>
</form></td></tr>
<?php
} 
else{
	?>
    <form method="get" action="bookssuccess.php" name="BUY_NOW" ><!--<button type="submit" value="" name="BUY_NOW" class="buynow">BUY NOW-->
    <tr><td align="center"><a href="bookssuccess.php?id=<?php echo $id1;?>"><img src="Images/buynow.png.jpeg"  width="140px" height="68px"></a>
    </form></td></tr>
    <?php

	}}
	?>
		</table>
        </div>
    
    </div>
    

</div>
<br style="clear:both">

<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>
</body>
</html>
