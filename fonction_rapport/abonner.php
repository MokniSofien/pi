
<?php

extract($_POST);
if(isset($_POST['submit']))
{ 		
      $email=$_POST['email'];
     
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO abonner VALUES('','$email',NOW())"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 

	echo '<body onLoad="alert(\'merci pour votre confiance\')">';
	
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';

     
	 

    mysqli_close($db);  
    } 


  	
     
?>
