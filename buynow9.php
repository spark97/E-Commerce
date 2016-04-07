<html> 
<head>
<meta charset="utf-8">
<title>Mobile-Asus</title>
<link type="text/css" rel="stylesheet" href="buynow.css"/>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link type="text/css" rel="stylesheet" href="leftsidebar.css"/>

</head>

<?php
session_start();
$iid=$_SESSION['itemid'];
session_destroy();
?>
<?php
include('function.php');
$uname=validate($_POST['username']);
$password=validate($_POST['passwd']);

$query="select * from reg where Name like '$uname' ";
$con=con();
$res=$con->query($query);
	while($arr=$res->fetch_array()){
		if($arr['Password']==$password)
		{ 
		 $id=$arr['Customer_Id'];
			    session_start();
			$_SESSION['id']=$id;
			echo "WELCOME";
			$a="$iid"."$id";
			$quer3="UPDATE reg SET Order_id = '$a' where Customer_Id='$id'";
$con1=con();
$res1=$con1->query($quer3);
			?>


<body>
<header>Content for New header Tag Goes Here</header>
<hr>

<nav>
<ul>
	<li><a href="mainpage.html">Home</a></li>
	<li><a href="categories.html">Categories</a>
    <div class="submenu">
		<ul>
        	<div class="submenuitem"><li><a href="electronics.html">Electronics</a></li></div>
			<div class="submenuitem"><li><a href="fashion.html">Fashion & Lifestyle</a></li></div>
			<div class="submenuitem"><li><a href="books">Books</a></li></div>
			<div class="submenuitem"><li><a href="sports">Sports</a></li></div>

        </ul>
        </div>
	</li>
	<li><a href="signin.html">Sign In</a></li>
	<li><a href="signup.html">Sign Up</a></li>
	<li><a href="customercare.html">Customer Care</a></li>
</ul>
</nav>



<div class="main_div">
		<div class="leftsidebar">
		<ul>
			<li><a href="mobilephones.html">Mobile Phones</a></li>
			<li><a href="computers.html">Computers</a></li>
			<li><a href="television.html">Television</a></li>
			<li><a href="homeappliances.html">Home Appliances</a></li>
		</ul>
		</div>
    
    <div class="info">
    	<header class="infoname">
        <font size="+3" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif">Asus Zenfone C</font>
        </header>
        
        <div class="displayname">
       <p> Welcome <?php
	    echo $arr['Name'];
		?> </p>
        </div>
        
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

		</table>
        </div>
    
    </div>
    
    <div class="buyerinfo">
    	<table width="100%">
        	
            <tr><td align="right">Contact No.:</td><td><?php
	    echo $arr['Contact'];
		?></td></tr>
			<tr><td align="right">Delivery Address:</td><td><form action="buynow2.php" method="post" name="address">
<textarea rows="5" name="address">
<button type="submit" name="submit" value="Submit">CLick Here</button>
</form></td></tr>
			
        </table>
    </div>
        <?php
	}
	else
	{
		echo "INVALID PASSWORD ";
	}
}

	?>

</div>
<br style="clear:both">

<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>

</body>
</html>
