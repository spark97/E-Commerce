<?php
session_start();
?>
<?php
include('function.php');
if(isset($_SESSION['uname1']))
{
$uname1=$_SESSION['uname1'];
$password1=$_SESSION['password1'];
$query6="select * from reg where Name like '$uname1' ";
$con6=con();
$res6=$con6->query($query6);

	while($arr=$res6->fetch_array()){
		
		 $id=$arr['Customer_Id'];
			$_SESSION['id']=$id;
			$name=$arr['Name'];
		
	}
}
			?>
<html>
<head>
<meta charset="utf-8">
<title>Mobile Phones</title>
<link type="text/css" rel="stylesheet" href="mobilephones.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aladin:n4:default.js" type="text/javascript"></script>
</head>


<body>
<div style="max-width:100%; ">
<header class="mainhead"><p><img src="Images/Shopping-Cart-icon123123.png" width="150" height="150">&nbsp;&nbsp;<img src="Images/icon.png"></p>
	<div class="userinfo"><p><?php 
	if(isset($uname1))
echo "Welcome"." $uname1" ;
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
    <font face="Stencil" size="+2">ELECTRONICS-Mobile Phones</font>
    </header>
	
	<div class="offers">
		<hr>
		<table width="100%">
        <tr>
        	<td align="center"><img src="Images/20150313_000058_730x300_2.jpg" width="450" height="250"></td>
            <td align="center"><img src="Images/20150312_175949_730x300_clp-registration-open.jpg" width="450" height="250"></td>
        <tr>
        </table>
	
	</div>
</div>

<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M1$" role="button">
                    <img src="Images/asus-zenfone-c-zc451cg-1a029ww-400x400-imae4eekzhyckwzf.jpeg" width="150" height="250"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">ASUS PHONE</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.12,000</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M2$" role="button"><img src="Images/mi-mi4-64gb-mzb4240in-400x400-imae4qwz5jthgnd7.jpeg" width="150" height="250"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">MI-4</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.20,000</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center"width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M6$" role="button"><img src="Images/IMG_1426603767458.jpeg" width="130" height="250"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Lava Iris X8</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.8,999</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M5$" role="button"><img src="Images/motorola-moto-turbo-xt1225-400x400-imae5fyxgh7qy6ag.jpeg"width="150" height="250"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Micromax Turbo</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.41,999</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M3$" role="button"><img src="Images/microsoft-lumia-535-400x400-imae26hzvfuxbgur.jpeg"width="130" height="250"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Microsoft Lumia</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.22,000</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center"width="100%">
                	<tr><td align="center"><form  method="post"><a  href="mobilebutton.php?id=M4$" role="button"><img src="Images/motorola-moto-e-2nd-gen-xt1521-400x400-imae5yvnugydbf9d.jpeg"width="150" height="250"></a></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Moto-E</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.6,000</b></font></td></tr>
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
