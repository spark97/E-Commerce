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
<title>Computers</title>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<link type="text/css" rel="stylesheet" href="television.css"/>
</head>

<body>
<div style="max-width:100%; ">
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


<div class="main_div">
	<div class="leftsidebar">
	<ul>
		<li><a href="mobilephones.php">Mobile Phones</a></li>
		<li><a href="computers.php" >Computers</a></li>
		<li><a href="television.php">Television</a></li>
		<li><a href="homeappliances.php">Home Appliances</a></li>
	</ul>
   
	</div>

	<header class="heading">
    <font face="Stencil" size="+2">ELECTRONICS-Television</font>
    </header>
	
	<div class="offers">
		<hr>
		<table width="100%">
        <tr>
        	<td align="center"><img src="Images/20150312_202624_730x300_category-landing-page-1.jpg" width="450" height="250"></td>
            <td align="center"><img src="Images/20150304_121630_730x300_image-730-300.jpg" width="450" height="250"></td>
        <tr>
        </table>
	
	</div>
</div>

<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="televisionbutton.php?id=T1$" role="button"><img src="Images/micromax-40t2810fhd-400x400-imae4ryxgwqfyvqz.jpeg" width="200" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Micromax</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.40,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="televisionbutton.php?id=T2$" role="button"><img src="Images/lg-42lb5820-400x400-imae4ryxd2gq4dj8.jpeg" width="200" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">LG</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.50,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center"width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="televisionbutton.php?id=T3$" role="button"><img src="Images/samsung-55hu7000-400x400-imaey7f9tstbzcyq.jpeg" width="200" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Samsung</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.85,000</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="televisionbutton.php?id=T4$" role="button"><img src="Images/vu-32k160-400x400-imae58jxh3jwjaej.jpeg" width="200" height="130"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">VU</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.16,000</b></font></td></tr>
                </table>
            </td>
            
            
        </tr>
        
        
    </table>


</div>


<br style="clear: both"/>

<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>
</div>
</body>
</html>
