<?php




 session_start();
 
 
 if (@$_SESSION['connecte']=="ok!!")
{
	$idd = $_SESSION['id'] ;


	// echo "<script>";
    // echo "window.location='../profile/index.php?id=".$idd."'";
    // echo "</script>";
	
	header ('location:../profile/index.php?id="'.$idd.'"');

}
else { 






 $host="localhost";
$user="root";
$password="";
 $dbname='com';

 if(isset($_POST['submit'])){
//include'connexion.php';

$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="select * from client";
$result=mysqli_query($cxn,$requete);
 while ($ligne=mysqli_fetch_array($result)){
$email=$ligne['email'];
$password=$ligne['password'];
$id=$ligne['id'];
$actif=$ligne['actif'];
 }

// on teste si nos variables sont définies
if (isset($_POST['email']) && isset($_POST['pass'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($email == $_POST['email'] && $password == $_POST['pass']&&$actif==1) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pass'] = $_POST['pass'];
		$_SESSION['logged'] = true;
		$session=$_SESSION['logged'];
		$_SESSION['connecte']="ok!!";
		$_SESSION['id']=$id;
		// on redirige notre visiteur vers une page de notre section membre
				header ('location:../profile/index.php?id="'.$id.'"');

	}
	else if ($email == $_POST['email'] && $password == $_POST['pass']&&$actif!=1){echo '<body onLoad="alert(\'utilisateur desctiver\')">';}
	else {
		 unset($_SESSION);
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'mot de passe ou adresse electronqiue incorrecte\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}}

}
?>