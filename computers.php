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
<title>Computers</title>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<link type="text/css" rel="stylesheet" href="computers.css"/>
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
    <font face="Stencil" size="+2">ELECTRONICS-Computers</font>
    </header>
	
	<div class="offers">
		<hr>
		<table width="100%">
        <tr>
        	<td align="center"><img src="Images/20141107_141538_730x300_category-landing-page.jpg" width="450" height="250"></td>
            <td align="center"><img src="Images/Laptops.jpg" width="450" height="250"></td>
        <tr>
        </table>
	
	</div>
</div>

<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="computerbutton.php?id=C1$" role="button"><img src="Images/hp-notebook-400x400-imadxxhmh3ysrhcj.jpeg" width="150" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Hp-Notebook</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.40,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="computerbutton.php?id=C2$" role="button"><img src="Images/hp-pavilion-notebook-400x400-imae3y4g3bcuetmv.jpeg" width="150" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Hp-Pavillion</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.50,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center"width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="computerbutton.php?id=C3$" role="button"><img src="Images/dell-inspiron-notebook-400x400-imadwescm4yqy7qv.jpeg" width="150" height="150"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Dell-Inspiron</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.45,000</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="computerbutton.php?id=C4$" role="button"><img src="Images/lenovo-400x400-imae27t9amms4ye7.jpeg" width="150" height="130"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Lenovo</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.37,000</b></font></td></tr>
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
