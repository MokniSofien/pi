<?php

 $host="localhost";
$user="root";
$password="";
 $dbname='com';
extract($_POST);
if(isset($_POST['valider'])){
	
  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
    $champs_vide=array();
    if (empty($_POST['prenom'])){
         $champs_vide[]='"prenom"';
    }
	  if (empty($_POST['telephone'])){
         $champs_vide[]='"telephone"';
    }
	  if (empty($_POST['ville'])){
         $champs_vide[]='"ville"';
    }
     
    if (empty ($_POST['nom'])){
         $champs_vide[]='"nom"';
    }
             
    if (empty ($_POST['postal'])){
         $champs_vide[]='"code postal"';
    }
 
                         
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {      
          $champs_vide[] = '"Email"';
          echo 'Email invalide';
          $champs_mail[] = array();
          $champs_mail[] = "invalie";                   
    }
     //VERIFIER EMAIL
$email = $_POST['email'];
$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="SELECT email FROM client WHERE email='$email'";
$verif_email = mysqli_query($cxn,$requete);
if (mysqli_num_rows($verif_email) != 0)
{ 
        $email_number=1;   

        echo '<body onLoad="alert(\'email existe déjà\')">';

}
    if (empty ($_POST['pass'])){
         $champs_vide[]='"mot de passe"';   
    }
     
    if (empty ($_POST['confirm_pass'])){
         $champs_vide[]='"confirmer mot de passe"';
    }
     
 
   if ( $_POST['confirm_pass'] != $_POST['pass'] ) {
     
      echo '<span style="color:red; font-weight:normal;">Les 2 mots de passe sont différents! </span>';
      $champs_double = array();
      $champs_double[] = "doublons";
}
  $postal = $_POST['postal']; 
//VERIFIER LE CODE POSTAL

 

//FIN DE VERIFICATION
 

   if (empty ($champs_vide) && empty($champs_double) && empty($champs_mail)){      
         $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $email=$_POST['email'];
      $postal=$_POST['postal'];
	        $ville=$_POST['ville'];
				        $telephone=$_POST['telephone'];

			

      $pass=$_POST['pass'];
      $confirm_pass=$_POST['confirm_pass'];
     
    echo ' <div style="padding-left:240px; margin-top: 10px; margin-bottom:-10px">Votre inscription a bien été pris en compte.</div>';
     

     
     $cxn=mysqli_connect($host,$user,$password,$dbname);

       $sql='INSERT INTO client VALUES("","'.$nom.'","'.$prenom.'","'.$ville.'", "'.$postal.'", "'.$email.'","'.$pass.'", "'.$confirm_pass.'",NOW(),"'.$telephone.'","'.$Image.'",1)';
     $verif = mysqli_query($cxn,$sql);
     
                           } //champs_vide
     
   
        
  else {
      if (!empty($champs_vide)){
        echo '<div style="padding-left:150px; color:red; margin-bottom: -15px"><h4 style="padding-left:90px;padding-top:90px; padding-bottom:50px;">Merci de remplir le champs suivant:</h4> <span style="text-align:center">' .implode($champs_vide). '</span></div>'; 
       }
    
  }
   
  
} //valider
 
     
?>