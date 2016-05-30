
<?php

extract($_POST);
if(isset($_POST['envoi'])){
      $nom=$_POST['nom'];
   $email=$_POST['email'];
      $message=$_POST['message'];
	$nom_article=$_POST['nom_article'];
	$id_article=$_POST['id_article'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO commentaire VALUES('','$nom','$message',NOW(),'$id_article','$email','$nom_article')"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 

    echo 'Vos infos on été ajoutées.'; 

    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
 header("Location:index.php?id=$id_article");
  	
     
?>
