


<?php
session_start();
include('function.php');
$itemid=validate($_GET['id']);
$_SESSION['itemid']=$itemid;

header("location:buynow.php");

?>