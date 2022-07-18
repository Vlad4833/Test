
<?php
//connexion avec le serveur de donnees
$con = mysqli_connect("localhost","root","") or die("Probleme de connexion ".mysqli_error());
// selectionner la base
mysqli_select_db($con,"test") or die("La base n'existe pas ".mysqli_error($con));
?>


