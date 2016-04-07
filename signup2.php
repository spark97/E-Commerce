<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="signup.css" type="text/css"/>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="stylesheet" href="leftsidebar.css" type="text/css"/>

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

<div class="main">
  <div class="leftsidebar">
    <ul>
		<li><a href="electronics.html">Electronics</a></li>
		<li><a href="fashion.html" >Fashion & Lifesyle</a></li>
		<li><a href="books.html">Books</a></li>
		<li><a href="sports.html">Sports</a></li>
	</ul>
    </div>
    
    
  <div class="form">
    <form name="harshit" action="register2.php" method="post">
          <fieldset>											
		<legend><font size="+3" face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#940B0E"><b>Sign Up</b></font></legend>            
			<table align="center" height="500px">
				<tr>
					<th align="right"><font face="Comic Sans MS">Name:</font></th>
					<td><label><input type="text"  name="name" placeholder="Enter your name" required></label></td>
				</tr>
                
                
                <tr>
					<th align="right"><font face="Comic Sans MS">E-mail:</font></th>
					<td><label><input type="email"  name="email" placeholder="Enter your email" required></label></td>
				</tr>
                
                
                <tr>
					<th align="right"><font face="Comic Sans MS">Password:</font></th>
					<td><label><input type="password"  name="pass" placeholder="Enter your password" required></label></td>				                </tr>

				<tr>
					<th align="right"><font face="Comic Sans MS">Re-Enter Password</font>:</th>
					<td><label><input type="password"  name="repass" placeholder="Re-Enter your password" required></label></td>				                </tr>

				<tr>
                	<th align="right"><font face="Comic Sans MS">Contact No.:</font></th>
                    <td><label><input type="number"  name="number" placeholder="Enter your Contact No."required maxlength="10"></label></td>
                </tr>

				<tr>
					<td align="center" style="width:"><label><input type="submit" value="Submit"></label></td>
					<td align="center"><label><input type="reset" value="Reset"></label></td>
				</tr>  
</table>
		</fieldset>
 </form>
    </div>

</div>
<br style="clear:both">
<footer>
<hr>
Copyright &copy; 2015-2020 Clueless Idiots. 
</footer>


</body>
</html>
