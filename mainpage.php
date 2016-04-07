<?php
session_start();
?>
<?php
include('function.php');
if(isset($_SESSION['uname1']))
{?>
	
    <?php
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
<title>goKart</title>
<link type="text/css" rel="stylesheet" href="mainstyle.css"/>
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
<div>



<div class="rightsidebar">
<table>
<tr>
<td height="209"><a href="electronics.php"><img src="Images/mobile.jpg"></a></td>
</tr>
<tr>
<td height="215"><a href="sports.php"><img src="Images/CWC_SportsFitness_March15.jpg" width="348px" height="215"></a></td>
</tr>
</table>
</div>


<div class="main">
<header class="header1">
ELECTRONICS
</header>

<table cellspacing="10px" style="margin:auto">
<tr>
<td><a href="electronics.php"><img src="Images/20150302-113647-zenfone-p1.jpg"></a></td>
<td><a href="electronics.php"><img src="Images/20150310-162759-lenovo-p2.jpg"></a></td>
<td><a href="electronics.php"><img src="Images/20150310-162759-mototurbo-p3.jpg" ></a></td>
</tr>
</table>

</div>

<div class="main">
<header class="header1">
FASHION & LIFESTYLE
</header>
<table cellspacing="10px" style="margin:auto">
<tr>
<td width="172"><a href="fashion.php"><img src="Images/20150310-162927-poe-p1.jpg"></a></td>
<td width="380"><a href="fashion.php"><img src="Images/20150310-162927-cricket-p2.jpg"></a></td>
<td width="160"><a href="fashion.php"><img src="Images/20150310-162927-lakme-p3.jpg"></a></td>
</tr>
</table>
</div>

<div class="main">
<header class="header1">
BOOKS
</header>
<table cellspacing="30px" style="margin:auto">
<tr>
<td><a href="books.php"><img src="Images/concepts-of-modern-physics-200x200-imadc8buzkt4wuzx.jpg" width="172px" height="250px"></a></td>
<td><a href="books.php"><img src="Images/engineering-mechanics-dynamics-si-version-400x400-imadpdnx9xvtnhuz.jpg" width="172px" height="250px"></a></td>
<td><a href="books.php"><img src="Images/half-girlfriend-400x400-imadyktcr4gvdkjh.jpg" width="172px" height="250px"></a></td>
</tr>
</table>
</div>

<div class="main">
<header class="header1">
SPORTS
</header>
<table cellspacing="10px" style="margin:auto">
<tr>
<td><a href="sports.php"><img src="Images/bat.jpeg" width="330px" height="250px"></a></td>
<td><a href="sports.php"><img src="Images/Unicorn-Soft-Electronic-Dart-Board-SDL403736429-1-efa53.jpg" width="200px" height="250px"></a></td>
<td><a href="sports.php"><img src="Images/SDL789891543_1377176849_image1-1b713.JPG" width="172px" height="250px"></a></td>
</tr>
</table>
</div>
</div>




<hr>
<footer>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>



</body>
</html>
