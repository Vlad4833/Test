<?php 
$conn=mysqli_connect("localhost","root","") or die("probleme de connexion".mysql_error());
mysqli_select_db($conn,"test") or die("la base n'existe pas".mysql_error($conn));
$message=array();
 ?>
