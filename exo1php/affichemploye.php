<?php  
include("config.inc.php");

$sql="select * from employe";
$rqt=msqli_query($conn,$sql) or die (mysql_error());
 
?>