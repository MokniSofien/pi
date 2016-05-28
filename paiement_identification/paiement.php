<?php
 $host="localhost";
$user="root";
$password="";
 $dbname='com';

 if(isset($_POST['Valider'])){
//include'connexion.php';

$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="select * from paiement";
$result=mysqli_query($cxn,$requete);
 while ($ligne=mysqli_fetch_array($result)){
$numero_carte=$ligne['numero_carte'];
$password=$ligne['password'];
 }

// on teste si nos variables sont définies
if (isset($_POST['numero_carte']) && isset($_POST['password'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($numero_carte == $_POST['numero_carte'] && $password == $_POST['password']) {

		        echo '<body onLoad="alert(\'commande effectuee avec succes\')">';
				// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../tarif/index.php">';


	}
	else {
		 unset($_SESSION);
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'mot de passe ou numero carte incorrecte\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../panie_paiement/choix_carte.html">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}}
?>