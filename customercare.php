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
		if($arr['Password']==$_SESSION['password1'])
		{ 
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		}
		else
		{
		header("location:signin2.php");
			}
	}
}
			?>
<html>
<head>
<meta charset="utf-8">
<title>Customer Care</title>
<link rel="stylesheet" href="customercare.css" type="text/css"/>
<link rel="stylesheet" href="main.css" type="text/css"/>
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
<a href="logout.php">Logout</a><?php ;
	
	
	
	}
else {?>
<a href="signin.php">Sign In</a><?php ;}?></li>
	<li><a href="signup.php">Sign Up</a></li>
	<li><a href="customercare.php">Customer Care</a></li>
</ul>
</nav>

<div class="main">
	<div class="maininfo">
    	<p><font face="Comic Sans MS" size="+2"><b>Call Us:</b></font><br><br>We're available 24 hours a day.<br>(0124) 56789 or 1888 222 9898.<br><br>Need assistance in buying?
<br>Call our product experts 1888 1888 1888 </p>
    </div>
    
    <div class="maininfo">
    	<p><font face="Comic Sans MS" size="+2"><b>Address:</b></font><br><br>Swami Vivekanda Boys Hostel,<br>Motilal Nehru National Institute Of Technology,<br>Allahabad.</p>
    </div>
    
    <div class="maininfo">
    	<p><font face="Comic Sans MS" size="+2"><b>Web Developers:</b></font><br><br>Urjit Patel<br>Harshit Shah<br>Anshul Singh</p>
    </div>
</div>
</body>
</html>
