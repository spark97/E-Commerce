


<?php
session_start();
include('function.php');
$itemid=validate($_GET['itemid']);
$_SESSION['id']=$itemid;

header("location:buynowtelevision.php");

?>