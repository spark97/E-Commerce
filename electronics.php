<?php
session_start();
?>
<?php
include('function.php');
if(isset($_SESSION['uname1']))
{
$uname1=$_SESSION['uname1'];
$password1=$_SESSION['password1'];
$query5="select * from reg where Name like '$uname1' ";
$con5=con();
$res5=$con5->query($query5);

	while($arr=$res5->fetch_array()){
		
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		
	}
}
			?><html>
<head>
<meta charset="utf-8">
<title>Electronics</title>
<link type="text/css" rel="stylesheet" href="electronics.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
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

<div class="rightsidebar">
<table>
<tr>
<td height="209"><a href="mobilephones.php"><img src="Images/mobile.jpg"></a></td>
</tr>
<tr>
<td height="215"><a href="sports.php"><img src="Images/CWC_SportsFitness_March15.jpg" width="348px" height="215"></a></td>
</tr>
</table>
</div>



<div class="main">
<header class="header1">
<div class="headertitle">MOBILE PHONES</div><div class="explorenow"><a href="mobilephones.php">Explore Now</a></div>
</header>
<table cellspacing="10px" style="margin:auto" width="100%">
<tr>
<td align="center"><img src="Images/20150302-113647-zenfone-p1.jpg"></td>
<td align="center"><img src="Images/microsoft-lumia-535-400x400-imae26hzvfuxbgur.jpeg" height="200" width="103"></td>
<td align="center"><img src="Images/20150310-162759-mototurbo-p3.jpg" ></td>
</tr>
</table>
</div>

<div class="main">
<header class="header1">
<div class="headertitle">COMPUTERS</div><div class="explorenow"><a href="computers.php">Explore Now</a></div>
</header>
<table cellspacing="10px" style="margin:auto" width="100%">
<tr>
<td align="center"><img src="Images/dell-inspiron-notebook-400x400-imadwescm4yqy7qv.jpeg" width="200" height="133"></td>
<td align="center"><img src="Images/hp-notebook-400x400-imadxxhmh3ysrhcj.jpeg" width="200" height="168"></td>
<td align="center"><img src="Images/hp-pavilion-notebook-400x400-imae3y4g3bcuetmv.jpeg" width="200" height="156"></td>
</tr>
</table>
</div>


<div class="main">
<header class="header1">
<div class="headertitle">TELEVISION</div><div class="explorenow"><a href="television.php">Explore Now</a></div>
</header>
<table cellspacing="10px" style="margin:auto" width="100%">
<tr>
<td align="center"><img src="Images/lg-42lb5820-400x400-imae4ryxd2gq4dj8.jpeg" width="200" height="133"></td>
<td align="center"><img src="Images/samsung-55hu7000-400x400-imaey7f9tstbzcyq.jpeg" width="200" height="181"></td>
<td align="center"><img src="Images/vu-32k160-400x400-imae58jxh3jwjaej.jpeg" width="200" height="133"></td>
</tr>
</table>
</div>

<div class="main">
<header class="header1">
<div class="headertitle">HOME APPLIANCES</div><div class="explorenow"><a href="homeappliances.php">Explore Now</a></div>
</header>
<table cellspacing="10px" style="margin:auto" width="100%">
<tr>
<td align="center"><img src="Images/godrej-muziplay-400x400-imae4ryvgcywnxsm.jpeg" height="300"></td>
<td align="center"><img src="Images/ifb-senator-aqua-sx-8-kg-400x400-imae4s4zzhchrqf9.jpeg" height="300"></td>
<td align="center"><img src="Images/kenstar-m-o-km20ssln-17-l-400x400-imadxw9jzrncazgw.jpeg" height="240" width="300"></td>
</tr>
</table>
</div>


<hr>
<footer>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>
<body>
</body>
</html>
