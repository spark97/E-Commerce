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
<title>Sports</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="stylesheet" href="sports.css" type="text/css"/>
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
<header class="header1">
<div class="headertitle">SPORTS</div>
</header>
		
		<div class="itemlist">

	<table width="100%" cellspacing="15px">
    	<tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="sportsbutton.php?id=S1$" role="button"><img src="Images/SDL789891543_1377176849_image1-1b713.JPG" width="150" height="200"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Ping Golf Kit</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.11,999</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="sportsbutton.php?id=S2$" role="button"><img src="Images/Unicorn-Soft-Electronic-Dart-Board-SDL403736429-1-efa53.jpg" width="150" height="200"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Super-K Dart Board</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.559</b></font></td></tr>
                </table>
            </td>
            
            <td>
            	<table align="center"width="100%">
                	<tr><td align="center"><form  method="post"><a  href="sportsbutton.php?id=S3$" role="button"><img src="Images/bat.jpeg" width="130" height="200"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">Puma Bat</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.8,000</b></font></td></tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        	<td>
            	<table align="center" width="100%">
                	<tr><td align="center"><form  method="post"><a  href="sportsbutton.php?id=S4$" role="button"><img src="Images/football.jpeg"width="150" height="200"></a></form></td></tr>
                    <tr><td align="center" ><font size="+1" face="Comic Sans MS">LiverPool Football</font></td></tr>
                    <tr><td align="center"><font size="+1" face="Comic Sans MS"><b>PRICE:&nbsp;Rs.399</b></font></td></tr>
                </table>
            </td>
            
           
        </tr>
        
        
    </table>


</div>

</div>


</body>
</html>
