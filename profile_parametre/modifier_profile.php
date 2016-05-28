<?php
extract($_POST);

if(isset($_POST['Valider']))
{ 
  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
    $id=$_POST['id'];
      $nom=$_POST['nom'];
$ville=$_POST['ville'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
         $sql = 'UPDATE client SET nom="'.$nom.'",ville="'.$ville.'",prenom="'.$prenom.'",telephone="'.$telephone.'",email="'.$email.'",image="'.$Image.'" WHERE id="'.$id.'"'; 

    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
header ('location:../profile/index.php?id="'.$id.'"');


    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
