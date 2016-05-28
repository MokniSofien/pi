<?php 
if(isset($_REQUEST['submit']))
{

$prix=$_REQUEST['prix'];
$totale=$_REQUEST['totale'];
$prixbi=$_REQUEST['prixbi'];
$totalebi=$_REQUEST['totalebi'];
$prixentreprise=$_REQUEST['prixentreprise'];
$totalentreprise=$_REQUEST['totalentreprise'];
$id=$_REQUEST['id'];
if($prix==0&&$totale==0&&$prixbi==0&&$totalebi==0&&$prixentreprise==0&&$totalentreprise==0)
{
	echo '<body onLoad="alert(\'panier vide ..veuillez choisir un produit\')">';
		echo '<meta http-equiv="refresh" content="0;URL=panier.php?id='.$id.'">';

		// puis on le redirige vers la page d'accueil

}else {
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO achat VALUES('','$prix','$prixbi','$prixentreprise','$totale','$totalebi','$totalentreprise','$id',NOW())"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 

    header('location:/travail/site/panie_paiement/choix_carte.html');
     mysqli_close($db);
}
    

}

?>