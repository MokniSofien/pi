<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" /> 

<title>Untitled Page</title>
  
<link href="fronte.css" rel="stylesheet">
<link href="../acceuil/blog_ouver.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../pop.css" rel="stylesheet">
<link href="../foo.css" rel="stylesheet">
<link href="article.css" rel="stylesheet">
<script>
function ValidateLayer2(theForm)
{
   var regexp;
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.TextArea1.value))
   {
      alert("Please enter only letter characters in the \"TextArea1\" field.");
      theForm.TextArea1.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer3(theForm)
{
   var regexp;
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.TextArea2.value))
   {
      alert("Please enter only letter characters in the \"TextArea1\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}
</script>


</head>
<body>

<div id="container">




<div id="Layer4" style="position:absolute;text-align:left;left:33px;top:132px;width:737px;height:890px;z-index:64;">
   <?php 
   if(isset($_POST['submit'])){
if(isset($_POST['requete']) && $_POST['requete'] != NULL) // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
{
	$requete = htmlspecialchars($_POST['requete']);

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
    $requete="SELECT * FROM produit where nom like '%$requete%' ";
	
	    $response=mysqli_query($db,$requete);
	$nb_resultats= mysqli_num_rows($response);
	if($nb_resultats != 0) // si le nombre de résultats est supérieur à 0, on continue
{
// maintenant, on va afficher les résultats et la page qui les donne ainsi que leur nombre, avec un peu de code HTML pour faciliter la tâche.
?>
<span style="color:#000000;font-family:Exo;font-size:23px;">Resultats de votre recherche.</span>
<p>Nous avons trouves <?php echo $nb_resultats; // on affiche le nombre de résultats 
if($nb_resultats > 1) { echo ' resultats '; } else { echo 'resultat '; } // on vérifie le nombre de résultats pour orthographier correctement. 
?>
  dans notre liste d'articles. Voici les articles que nous avons trouvees :<br/>
<br/>
<?php

while($ligne=mysqli_fetch_array($response)){



?>
<div  id="article">

<div id="wb_Text24" style="position:absolute;left:77px;top:65px;width:568px;height:18px;z-index:36;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:15px;"><strong><?php echo $ligne['nom']?></strong></span></div>
<div id="wb_Text25" style="position:absolute;left:111px;top:94px;width:74px;height:16px;z-index:37;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;"><?php echo $ligne['prix']?></span></div>
<div id="wb_Image7" style="position:absolute;left:182px;top:94px;width:15px;height:16px;z-index:38;">
<img src="../images/cal%20min.png" id="Image7" alt=""></div>
<div id="wb_Image6" style="position:absolute;left:96px;top:96px;width:13px;height:14px;z-index:39;">
<img src="../images/min%20admin.png" id="Image6" alt=""></div>
<div id="wb_Text26" style="position:absolute;left:205px;top:94px;width:102px;height:16px;z-index:40;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;"><?php echo $ligne['version']?></span></div>
<div id="wb_Image8" style="position:absolute;left:77px;top:146px;width:515px;height:304px;z-index:41;">
<a href="../blog/index.php?id=<?php echo $ligne['id'];?>"><img src="../../admin/imageproduit/<?php echo $ligne['image'];?>"style="width:90%" alt="" /><a/></div>
<div id="wb_Text27" style="position:absolute;    word-wrap: break-word; left:77px;top:465px;width:530px;height:96px;z-index:42;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em><?php echo $ligne['description']?></em></span></div>

<div id="wb_Text28" style="position:absolute;left:162px;top:619px;width:530px;height:32px;z-index:44;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>
<div id="wb_Text29" style="position:absolute;left:197px;top:661px;width:100px;height:16px;z-index:45;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>
<div id="wb_Text30" style="position:absolute;left:77px;top:716px;width:530px;height:96px;z-index:46;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>
</div>
<?php
   }}else{  ?> <p>aucun resultat trouvé</p> 
  
 
	   
	   <?php
	   }
   }
   
   } ?>
</div>
</div>
<!-- header-->


<div id="PageHeader1"style="overflow:none;" >
<div id="wb_Image1" >
<img src="../images/logg.png" id="Image1" alt=""></div>
<div id="PageHeader1_Container" style="width:1091px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<div id="Layer1" >





<iframe id="me" src="../menu/"></iframe>










<div id="Layer2" >
  <form action="recherche.php" method="POST"> 
<input name="requete" id="TextArea1" style="overflow: hidden; position:absolute;left:4px;top:7px;width:179px;height:17px;z-index:0;" rows="0" cols="27"></textarea>
<div id="wb_Image2" >

  <button name="submit" type="submit" value="valider" style=" background-color: transparent; border: none;">
<img style="    width: 15px;"src="../images/recheche.png" id="Image2" alt=""></button>
</form>
</div>
<div id="wb_Image3">

<script language="JavaScript" type="text/javascript">
	
	  function changeFrame(newPage){
		document.getElementById("myframe").src = newPage;
	  }
	
	</script>
	
<script>
function autoResize(id){
    var newheight;
    var newwidth;

    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document.body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document.body.scrollWidth;
    }

    document.getElementById(id).height=(newheight) + "px";
    document.getElementById(id).width=(newwidth) + "px"; 
}

</script>


<!-- login -->

<a  href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';changeFrame('../connexion/');center();"><img src="../images/icone6.png" id="im_profil" alt=""></a>

		<!-- end login --> 
		</div>
		
		<div id="profil">
		
<script language="JavaScript" type="text/javascript">
	
	  function changeFramee(newPage){
		document.getElementById("myframep").src = newPage;
	  }
	
	</script>
<a  href = "javascript:void(0)" onclick = "document.getElementById('lightp').style.display='block';document.getElementById('fadep').style.display='block';changeFramee('../panier_connexion/page8.html');"><img id="im_profil" src="../images/icone5.png"><a/></div>
		<div id="lightp" class="white_contentp"> 
		
<a href = "javascript:void(0)" onclick = "document.getElementById('lightp').style.display='none';document.getElementById('fadep').style.display='none'"><iframe id="myframep" scrolling= "no" style="  height:500px ; width:780px ;border:none;" src="default.html" ></iframe>

<img src="../images/x.png" style="position: absolute; top:-20px;left:-30px ; width:54px;"></a></div>




</div>





</div>
</div>





<!--end header-->




<div id="footer" style="
    top: 800px;
" >

<div id="wb_titre">
<span style="color:#707070;font-family:Exo;font-size:20px;">COFEE <b>PARK</b></span><span style="color:#000000;font-family:Exo;font-size:27px;"> </span><span style="color:#202020;font-family:Exo;font-size:24px;"><strong>PARK</strong></span></div>
<div id="wb_presentation">
<span style="color:#A4A4A4;font-family:Exo;font-size:13px;">World Park est une compagne digital fut de développer une charte graphique, Cette ligne graphique générale a donc pour vocation de renforcer le logotype. Au-delà de la cohérence générale recherchée, cette charte se veut suffisamment souple pour permettre à la diversité des supports de communication d'exister les uns par rapport aux autres. C'est pourquoi, cette charte graphique s'articule autour de 4 grandes parties.</span></div>
<div id="wb_abonner">
<span style="color:#707070;font-family:Exo;font-size:20px;">ABONNER-VOUS A <b> NOTRE </br> NEWS LETTER</span></div>
<div id="wb_contacter">
<span style="color:#707070;font-family:Exo;font-size:20px;"><b>CONTACTER</b>-NOUS</span></div>
<div id="wb_telephone">
<span style="color:#707070;font-family:Exo;font-size:13px;"> TEL : 71 531 745 <br> Adresse : Le Bardoo</span></div>
<div id="wb_tweeter">
<a href="http://tweeter.com"><img src="images/twitter.png" id="tweeter" alt=""></a></div>
<div id="wb_gmail">
<a href="https://plus.google.com/u/0/113695750852278247904/posts"><img src="images/g%2B.png" id="gmail" alt=""></a></div>
<iframe id="mee" src="../menuf/"></iframe>
<div id="wb_facebook">
<a href="https://www.facebook.com/Coffee-Park-1013819342041065/"><img src="images/fb.png" id="facebook" alt=""></a></div>
<hr id="trai">
<div id="wb_titre2016">
<span style="color:#A4A4A4;font-family:Exo;font-size:17px;">coffeePark &#0169; 2016.</span></div>
<form action="abonner.php" method="POST">
<input name="email" id="TextArea1" type="email" required="required" placeholder="Abonnez-vous" >
<input class="btn shake-little"  type="submit" id="Button1" name="submit" value="S'abonner">
</form>
</div>

</div>
</div>
</div>

</body>
</html>