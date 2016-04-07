<?php
session_start();
?>
<?php
include('function.php');
$itemid=$_SESSION['itemid'];
$b=$_SESSION['uname1'];

if(isset($b))
{
$query7="select * from items where itemid like '$itemid' ";
$con7=con();
$res7=$con7->query($query7);

$uname1=$_SESSION['uname1'];
$query4="select * from reg where Name like '$uname1' ";
$con4=con();
$res4=$con4->query($query4);

	while($arr=$res4->fetch_array()){
		while($ar=$res7->fetch_array()){
		
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		
	}
}
			?>
<html>
<head>
<meta charset="utf-8">
<title>Mobile-Asus</title>
<link type="text/css" rel="stylesheet" href="mobile-asus.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aladin:n4:default.js" type="text/javascript"></script>
</head>

<body>
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($_SESSION['uname1']))
echo "Welcome ". $_SESSION['uname1'] ;
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
<a href="signin.html">Sign In</a><?php ;}?></li>
	<li><a href="signup.php">Sign Up</a></li>
	<li><a href="customercare.php">Customer Care</a></li>
</ul>
</nav>



<div class="main_div">
		<div class="leftsidebar">
		<ul>
			<li><a href="mobilephones.php">Mobile Phones</a></li>
			<li><a href="computers.php">Computers</a></li>
			<li><a href="television.php">Television</a></li>
			<li><a href="homeappliances.php">Home Appliances</a></li>
		</ul>
		</div>
    
    <div class="info">
    	<header class="infoname">
        <font size="+3" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?php echo $ar['name']; ?></font>
        </header>
        
        <div class="infoimg"><img src="Images/asus-zenfone-c-zc451cg-1a029ww-400x400-imae4eekzhyckwzf.jpeg"></div>
        
        <div class="productinfo" style="font-family:Comic Sans MS">
        	<table width="100%">
            
           <tr><td style="padding:20px; text-decoration:underline"><font size="+2"><b>KEY FEATURES</b></font></td></tr>
            
            <tr><td>
            <ul>
            	<li>Android Version: <?php echo $ar['Version']; ?></li>
                <li>Wi-Fi Enabled</li>
                <li>Camera:<?php echo $ar['camera']; ?>MP</li>
                
                <li>Processor:Quad Core<?php echo $ar['core']; ?>GHz</li>
               
                <li>Price:&#8377 <?php echo $ar['price']; ?></li>
            </ul>
            </td></tr>
<tr><td align="center">
<?php
if(!isset($_SESSION['uname1']))
{ $idddd= $ar['itemid'];
	?>
<form method="post" action="itemid.php" name="buynow"><button type="submit" value="<?php echo $idddd;?>" name="BUY_NOW1">BUY NOW</form></td></tr>
<?php
} 
else{
	?>
    <form method="post" action="itemid2.php" name="buynow"><button type="submit" value="<?php echo $idddd;?>" name="BUY_NOW">BUY NOW</form></td></tr>
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
