
<?php

extract($_POST);
if(isset($_POST['envoi']))
{ 		
      $nom=$_POST['nom'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
        $message=$_POST['message'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO liste_mail VALUES('','$nom',NOW(),'$email','$message','$phone')"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 


     
        echo '<body onLoad="alert(\'message bien envoyé\')">';

    mysqli_close($db);  
    } 


     
?>
