<?php
 $host="localhost";
$user="root";
$password="";
 $dbname='com';

if(isset($_POST['submit']))
{
	$radio=$_POST['radio'];
	if($radio=="off")
	{
		
		header ('location:../inscrit2/');

	}
	else{
		
		
$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="select * from client";
$result=mysqli_query($cxn,$requete);
 while ($ligne=mysqli_fetch_array($result)){
$email=$ligne['email'];
$password=$ligne['password'];
$id=$ligne['id'];
 }

// on teste si nos variables sont définies
if ((isset($_POST['email']) && isset($_POST['pass'])) && ($radio=="on")) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($email == $_POST['email'] && $password == $_POST['pass']) {
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
				header ('location:../panier/panier.php?id="'.$id.'"');

	}
	else{
		
		echo '<meta http-equiv="refresh" content="0;URL=page8.html">';
		echo '<body onLoad="alert(\'L’e-mail ou Le mot de passe entré est incorrect.  \')">';
		
		
	}
		
		
		
	}
	
	
	
	
}	
}

?>