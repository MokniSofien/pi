<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
  
<link href="fronte.css" rel="stylesheet">
<link href="blog_ouver.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../footer.css" rel="stylesheet">
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
<style>
<!-- paramaitre ta3 el login --> 
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			
			
		}
		.white_content {
			display: none;
			position: fixed;
			top: 15%;
			left: 150px;
			right:150px;
			width: auto;
			height:80%;
			padding: 0px;
			border: 5px solid #4EB0CA;
			
			z-index:1002;
			overflow: none;
		}
	</style>

</head>
<body>
<div id="container">
<div id="Layer3" style="position:absolute;text-align:left;left:793px;top:232px;width:264px;height:509px;z-index:60;">
<form action="recherche.php" method="POST"> 
<input name="requete" id="TextArea2" style="position:absolute;left:30px;top:34px;width:178px;height:18px;z-index:23;" rows="0" cols="26">
<div id="wb_Image5" style="position:absolute;left:188px;top:36px;width:20px;height:18px;z-index:24;">

<button name="submit" type="submit" value="valider" style=" background-color: transparent; border: none;"><img src="../images/recheche.png" id="Image5" alt=""></button>
</form>
</div>
<div id="wb_Text12" style="position:absolute;left:24px;top:94px;width:80px;height:36px;z-index:25;text-align:left;">
<span style="color:#888685;font-family:Exo;font-size:15px;"><strong>Categories</strong></span></div>
<div id="wb_Text13" style="position:absolute;left:30px;top:130px;width:104px;height:16px;z-index:26;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text14" style="position:absolute;left:30px;top:163px;width:104px;height:16px;z-index:27;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text15" style="position:absolute;left:30px;top:198px;width:104px;height:16px;z-index:28;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text20" style="position:absolute;left:24px;top:257px;width:80px;height:36px;z-index:29;text-align:left;">
<span style="color:#888685;font-family:Exo;font-size:15px;"><strong>Categories</strong></span></div>
<div id="wb_Text21" style="position:absolute;left:30px;top:293px;width:104px;height:16px;z-index:30;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text22" style="position:absolute;left:30px;top:326px;width:104px;height:16px;z-index:31;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text23" style="position:absolute;left:30px;top:361px;width:104px;height:16px;z-index:32;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text16" style="position:absolute;left:24px;top:396px;width:110px;height:18px;z-index:33;text-align:left;">
<span style="color:#888685;font-family:Exo;font-size:15px;"><strong>Popular Tags</strong></span></div>
<div id="wb_Text17" style="position:absolute;left:30px;top:432px;width:104px;height:16px;z-index:34;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
<div id="wb_Text18" style="position:absolute;left:30px;top:465px;width:104px;height:16px;z-index:35;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Donec eu elit in</span></div>
</div>
<div id="wb_Text11" style="position:absolute;left:817px;top:248px;width:758px;height:18px;z-index:61;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:15px;"><strong>Recherche</strong></span></div>
<div id="wb_Line1" style="position:absolute;left:766px;top:231px;width:0px;height:891px;z-index:62;">
<img src="../images/img0001.png" id="Line1" alt=""></div>
<div id="wb_Text19" style="position:absolute;left:518px;top:167px;width:54px;height:23px;z-index:63;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:20px;">Blog</span></div>
<div id="Layer4" style="position:absolute;text-align:left;left:30px;top:232px;width:737px;height:890px;z-index:64;">
   <?php 
   if(isset($_POST['submit'])){
if(isset($_POST['requete']) && $_POST['requete'] != NULL) // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
{
	$requete = htmlspecialchars($_POST['requete']);

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
    $requete="SELECT * FROM article where titre like '%$requete%'";
	    $response=mysqli_query($db,$requete);
	$nb_resultats= mysqli_num_rows($response);
	if($nb_resultats != 0) // si le nombre de résultats est supérieur à 0, on continue
{
// maintenant, on va afficher les résultats et la page qui les donne ainsi que leur nombre, avec un peu de code HTML pour faciliter la tâche.
?>
<h3>Résultats de votre recherche.</h3>
<p>Nous avons trouvés <?php echo $nb_resultats; // on affiche le nombre de résultats 
if($nb_resultats > 1) { echo 'résultats'; } else { echo 'résultat'; } // on vérifie le nombre de résultats pour orthographier correctement. 
?>
dans notre liste d'articles. Voici les articles que nous avons trouvées :<br/>
<br/>
<?php

while($ligne=mysqli_fetch_array($response)){



?>
<div  style="position:relative;text-align:left;margin:10px 10px 10px 10px;width:568px;height:402px;float:left;display:block;z-index:30;">

<div id="wb_Text24" style="position:absolute;left:77px;top:76px;width:568px;height:18px;z-index:36;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:15px;"><strong><?php echo $ligne['titre']?></strong></span></div>
<div id="wb_Text25" style="position:absolute;left:111px;top:94px;width:74px;height:16px;z-index:37;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;"><?php echo $ligne['auteur']?></span></div>
<div id="wb_Image7" style="position:absolute;left:182px;top:94px;width:15px;height:16px;z-index:38;">
<img src="../images/cal%20min.png" id="Image7" alt=""></div>
<div id="wb_Image6" style="position:absolute;left:96px;top:96px;width:13px;height:14px;z-index:39;">
<img src="../images/min%20admin.png" id="Image6" alt=""></div>
<div id="wb_Text26" style="position:absolute;left:205px;top:94px;width:102px;height:16px;z-index:40;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;"><?php echo $ligne['date']?></span></div>
<div id="wb_Image8" style="position:absolute;left:77px;top:146px;width:515px;height:304px;z-index:41;">
<img src="../imageproduit/<?php echo $ligne['image'];?>"id="Image8" alt="" /></div>
<div id="wb_Text27" style="position:absolute;    word-wrap: break-word; left:77px;top:465px;width:530px;height:96px;z-index:42;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em><?php echo $ligne['text']?></em></span></div>

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
<input name="requete" id="TextArea1" style="overflow: hidden; position:absolute;left:4px;top:7px;width:179px;height:17px;z-index:0;" rows="0" cols="27">
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
	

<!-- login -->
<a  href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';changeFrame('../connexion/');"><img src="../images/icone6.png" id="im_profil" alt=""></a>
<div id="light" class="white_content"> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><iframe id="myframe" scrolling= "no" style="  height:100% ; width:100%;" src="default.html" ></iframe><span style="position: absolute; top:10px;left:10px">Close</span></a></div>
		<div id="fade" class="black_overlay"></div>
		<!-- end login --> 
		</div>
		<div id="profil"><img id="im_profil" src="../images/icone5.png"></div>
</div>





</div>
</div>
</div>




<!--end header-->




<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1122px;width:100%;height:182px;z-index:65;">
<div id="PageFooter1_Container" style="width:1091px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="Layer5" style="position:absolute;text-align:left;left:339px;top:21px;width:413px;height:146px;z-index:59;">
<div id="wb_Text9" style="position:absolute;left:148px;top:127px;width:126px;height:16px;z-index:53;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">cofeepark &#0169; 2015. </span></div>
<div id="wb_Text8" style="position:absolute;left:116px;top:69px;width:191px;height:16px;z-index:54;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">Mon-Sat 8:00 am to 8:00 pm</span></div>
<div id="wb_Text10" style="position:absolute;left:116px;top:95px;width:183px;height:16px;z-index:55;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;"> 800-2345-678;&nbsp; 800-2345-679</span></div>
<div id="wb_Text6" style="position:absolute;left:105px;top:0px;width:204px;height:23px;z-index:56;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:20px;">Get In Touch With Us</span></div>
<div id="wb_Text7" style="position:absolute;left:78px;top:43px;width:266px;height:16px;z-index:57;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">4578 Marmora Road,Glasgow D04 89GR</span></div>
<div id="wb_Image4" style="position:absolute;left:99px;top:95px;width:17px;height:16px;z-index:58;">
<img src="../images/phone.png" id="Image4" alt=""></div>
</div>
</div>
</div>

</body>
</html>