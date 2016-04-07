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
<title>Home Appliances</title>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<link type="text/css" rel="stylesheet" href="homeappliances.css"/>
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
    <font face="Stencil" size="+2">ELECTRONICS-Home Appliances</font>
    </header>
	
	<div class="offers">
		<hr>
		<table width="100%">
        <tr>
        	<td align="center"><img src="Images/20141027_164906_730x300_clp-1.jpg" width="450" height="250"></td>
            <td align="center"><img src="Images/20150313_212036_730x300_flat-25-off.jpg" width="450" height="250"></td>
        <tr>
        </table>
	
	</div>
</div>

<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center" height="200px"><form  method="post"><a  href="homeappbutton.php?id=H1$" role="button"><img src="Images/kenstar-m-o-km20ssln-17-l-400x400-imadxw9jzrncazgw.jpeg" width="200" height="150"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Kenstar Microwave</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.11,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center" height="200px"><form  method="post"><a  href="homeappbutton.php?id=H2$" role="button"><img src="Images/ifb-senator-aqua-sx-8-kg-400x400-imae4s4zzhchrqf9.jpeg" width="150" height="150"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Senator</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.25,000</b></font></td></tr>
                </table>
            </td>
            
            <td height="100%">
            	<table align="center"width="100%" height="100%">
                	<tr><td align="center"><form  method="post"><a  href="homeappbutton.php?id=H3$" role="button"><img src="Images/godrej-muziplay-400x400-imae4ryvgcywnxsm.jpeg" width="200" height="200"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Godrej Refrigarator</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.20,000</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	
            
            <td height="100%">
            	<table align="center" width="100%" height="100%">
                	<tr><td align="center" height="200px"><form  method="post"><a  href="homeappbutton.php?id=H4$" role="button"><img src="Images/1-5-godrej-split-gsc-18fx3-awoc-400x400-imae5gjqa9y8e39z.jpeg" width="275" height="130"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Godrej Split AC</font></td></tr>
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

