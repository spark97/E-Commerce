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
header("location:signin2.html");
} 
	while($arr=$res4->fetch_array()){
		if($arr['Password']==$_SESSION['password1'])
		{ 
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		}
		else
		{
		header("location:signin2.html");
			}
	}
}
			?>
<html>
<head>
<meta charset="utf-8">
<title>Mobile-Asus</title>
<link type="text/css" rel="stylesheet" href="mobile-asus.css"/>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aladin:n4:default.js" type="text/javascript"></script>
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
<a href="mainpage.php"><?php session_destroy(); ?>Logout</a><?php ;
	
	
	
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
        <font size="+3" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif">Asus Zenfone C</font>
        </header>
        
        <div class="infoimg"><img src="Images/asus-zenfone-c-zc451cg-1a029ww-400x400-imae4eekzhyckwzf.jpeg"></div>
        
        <div class="productinfo" style="font-family:Comic Sans MS">
        	<table width="100%">
            
           <tr><td style="padding:20px; text-decoration:underline"><font size="+2"><b>KEY FEATURES</b></font></td></tr>
            
            <tr><td>
            <ul>
            	<li>Dual Standby Sim (GSM + GSM)</li>
                <li>Wi-Fi Enabled</li>
                <li>5 MP Primary Camera</li>
                <li>Android v4.4 (KitKat) OS</li>
                <li>Expandable Storage Capacity of 64 GB</li>
                <li>0.3 MP Secondary Camera</li>
                <li>4.5-inch Touchscreen</li>
            </ul>
            </td></tr>
<tr><td align="center"><img src="Images/buynow.jpeg" width="140" height="63" ></td></tr>
        </div>
    
    </div>
    

</div>

<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>

</body>
</html>
