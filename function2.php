<?php
function validate($val){
$val=htmlentities($val);
$val=trim($val);
return $val;
}
function cone(){
$dbhost="localhost";
$dbuname="root";
$dbpassword="12345";
$dbname="reg1";
$cone=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);//part of object oriented programming(mysqli=class)
if($cone->connect_errno){
die("Not able to connect to database".$con->connect_error);
}
else  //echo"Data base connected:):D"; 
return $cone;
}
?>