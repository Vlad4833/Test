<?php  
include("config.inc.php");
include("tete.php");
if (isset($_POST['submit'])) {
	if (empty($_POST['nom'])) {
		$message[]="Champ vide";
	}
	elseif(!filter_var($_POST['email'],FILTER_VALIDATE_INT)){
		$message[] = "L'email doit etre un entier..";
	}
	if(empty($message)==true){
		$nom = $_POST['nom'];
		$pre = $_POST['prenom'];
		$sexe = $_POST['sexe'];
		$post = $_POST['post'];
		$email = $_POST['email'];
		$sql = "insert into employees_delams(nom, prenom, sex, post,email) values('$nom', '$pre','$sexe','$post','$email')";
		$req = mysqli_query($conn, $sql) or die("Probleme de requete ".mysqli_error($conn));
		header("location:insertemploye.php?success");
}
}
?>
<table>
<form method="post" action="#">
	<?php
		if (isset($_GET['success'])) {
			echo"Un etudiant a ete ajoute..";
		}else{
			foreach ($message as $key => $value) {
				echo $value."<br />";
			}
		}
	?>
<tr>
	<td><input type="text" name="nom" placeholder="Nom"></td>
</tr>
<tr>
	<td><input type="text" name="prenom" placeholder="Prenom"></td>
</tr>
  </tr>
  <tr><th>Sexe
	<input type="radio" name="sexe">M
  <input type="radio" name="sexe">F</th></tr>
  </tr>
  <tr>
	<td><input type="text" name="post" placeholder="Post"></td>
  </tr>
   <tr>
	<td><input type="text" name="email" placeholder="Email"></td>
  </tr>
	<tr>
    <td><input type="submit" class="btn" value="envoyer"></td>
     </tr>
     </table>
</form> 
</html>
