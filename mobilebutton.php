<?php

function validate($val){
$val=htmlentities($val);
$val=trim($val);
return $val;
}
$id=validate($_GET['id']);
session_start();
$_SESSION['itemid']=$id;
header("location:mobile.php");
?>