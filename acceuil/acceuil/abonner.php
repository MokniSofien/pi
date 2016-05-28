
<?php

extract($_POST);
if(isset($_POST['submit']))
{ 		
      $email=$_POST['email'];
     
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO abonner VALUES('','$email',NOW())"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 

     header('location:/travail/site/list_blog/');

    mysqli_close($db);  
    } 


  	
     
?>
