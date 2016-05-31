<!doctype html>
<html>
<head>
<content="text/html; charset=utf8" />
<title>Untitled Page</title>
  
<link href="fronte.css" rel="stylesheet">
<link href="blog_ouver.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../foo.css" rel="stylesheet">
<link href="../pop.css" rel="stylesheet">
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
<div style="height:100%">
<div id="container">


<div id="wb_Text19" style="position:absolute;left:518px;top:167px;width:54px;height:23px;z-index:63;text-align:left;">
<span style="color:#50B5D8;font-family:Exo;font-size:20px;">Blog</span></div>
<div id="Layer4" style="position:relative;text-align:left;left:30px;float:left;top:232px;width:737px;height:890px;z-index:64;">
   <?php 


$id=$_GET['id'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
    $requete="select * from article where id=".$id;
    $response=mysqli_query($db,$requete);
while($ligne=mysqli_fetch_array($response)){


?>
<div id="wb_Text24" style="position:absolute;left:220px;top:60px;width:568px;height:18px;z-index:36;text-align:center;">
<span style="color:#50B5D8;font-family:Exo;font-size:15px;"><strong><?php echo $ligne['titre']?></strong></span></div>
<div id="wb_Text25" style="position:absolute;left:111px;top:120px;width:74px;height:16px;z-index:37;text-align:left;">
<span style="color:#50B5D8;font-family:Exo;font-size:13px;"><?php echo $ligne['auteur']?></span></div>
<div id="wb_Image7" style="position:absolute;left:182px;top:120px;width:15px;height:16px;z-index:38;">
<img src="../images/cal%20min.png" id="Image7" alt=""></div>
<div id="wb_Image6" style="position:absolute;left:96px;top:120px;width:13px;height:14px;z-index:39;">
<img src="../images/min%20admin.png" id="Image6" alt=""></div>
<div id="wb_Text26" style="position:absolute;left:205px;top:120px;width:102px;height:16px;z-index:40;text-align:left;">
<span style="color:#50B5D8;font-family:Exo;font-size:13px;"><?php echo $ligne['date']?></span></div>
<div id="wb_Image8" style="position:absolute;left:77px;top:175px;width:515px;height:304px;z-index:41;">
<img src="../../admin/imageproduit/<?php echo $ligne['image'];?>"id="Image8" alt="" /></div>
 <div id="wb_Text27" style="position:absolute;    word-wrap: break-word; left:77px;top:600px;width:900px;height:96px;z-index:42;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em><?php echo $ligne['text']?></em></span></div>

<div id="wb_Text28" style="position:absolute;left:162px;top:619px;width:530px;height:32px;z-index:44;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>
<div id="wb_Text29" style="position:absolute;left:197px;top:661px;width:100px;height:16px;z-index:45;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>
<div id="wb_Text30" style="position:absolute;left:77px;top:816px;width:530px;height:96px;z-index:46;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><em></em></span></div>


	<?php
	// Create connection

	$req = "SELECT * FROM commentaire WHERE id_article='$id'ORDER BY ID DESC limit 1";
	$res=mysqli_query($db,$req);
	while($data1 = mysqli_fetch_array($res)){

	?>
	






 <img style="position:absolute; bottom: 50px;left:30px;" src="../images/tag.png" id="" alt="">
 <div id="wb_Text30" style="position:absolute; bottom: 50px;left:160px;width:530px;height:96px;z-index:46;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;"><p style="text-decoration: underline;"> <?php echo '<p>'.$data1['nom'].'</p>';?> <?php echo  '<p aligne\"right\">'.date("j/n/Y G:i",strtotime($data1['date'])).'</p>' ;?></p><em>  <?php echo '<p>'.$data1['comment'].'</p>';?></em></span></div>
<?php }?>	
</div>

<div id="comment">
<a href="https://www.facebook.com/Coffee-Park-1013819342041065/"><img style="position:absolute;left:30px;" src="../images/fb.png" id="" alt=""></a>
<a href="https://plus.google.com/u/0/113695750852278247904/posts"><img style="position:absolute;left:70px;top: 7px;" src="../images/g+.png" id="" alt=""></a>
<a href="https://www.tweeter.com"><img style="position:absolute;left:100px;top: 3px;"src="../images/twitter.png" id="" alt=""></a>s
<hr id="Line1">



<div id="wb_Text19" style="position:absolute;width:auto;height:20px;top:50px;left:43px;z-ndex:63;text-align:left;">
<span style="color:#black;font-family:Exo;font-size:12px;">Laisser un Commentaire ...</span></div>

<form action="addcom.php" method="POST">
<input name="nom" id="TextArea7"type="text" style="position:absolute;left:43px;top:122px;width:700px;;height:27px;z-index:43;" rows="0" cols="56" placeholder="Nom :" required="required">
<input name="email" id="TextArea7" type="email"style="position:absolute;left:43px;top:163px;width:700px;;height:27px;z-index:44;" rows="0" cols="56" placeholder="Email :"required="required">
		<input type="hidden" name="id_article" value="<?php echo $ligne['id'];?>"/></br>
				<input type="hidden" name="nom_article" value="<?php echo $ligne['titre'];?>"/></br>

<textarea name="message" id="TextArea7" type="text"style="position:absolute;left:43px;top:204px;width:700px;;height:75px;z-index:46;" rows="3" cols="56" placeholder="commentaire :"required="required"></textarea>
<input class="btn shake-little"  type="submit" id="Button1" name="envoi" value="Envoyer" style="position:absolute;left:180px;top:300px;width:177px;height:24px;z-index:47;">
<input class="btn shake-little"  type="submit" id="Button1" name="envoi" value="Annuler" style="position:absolute;left:380px;top:300px;width:177px;height:24px;z-index:47;">

</form>

</div>
<?php
 } ?>
</div>


<!-- header-->
<div id="fade" class="black_overlay"></div>
<div id="fadep" class="black_overlayp"></div>
<div align="center" style="    margin-left: 10%;
    width: 900px;
    margin: auto;
    position: relative;
    margin-right: auto;    z-index: 9999; ">   <div id="light" class="white_content"> 


<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><iframe onload="autoResize('myframe')"  id="myframe" scrolling= "yes" style="  border:none;" src="default.html" ></iframe>

<img src="../images/x.png" style="position: absolute; top:-20px;left:-30px ; width:54px;"></a></div>
		
		<div id="fade" class="black_overlay"></div></div>

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
</div>

<!--end header-->
<div id="footer" style="
    top: 1500px;
">

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
<a href="https://www.tweeter.com"><img src="images/twitter.png" id="tweeter" alt=""></a></div>
<div id="wb_gmail">
<a href="https://plus.google.com/u/0/113695750852278247904/posts"><img src="images/g%2B.png" id="gmail" alt=""></a></div>
<iframe id="mee" src="../menuf/"></iframe>
<a href="https://www.facebook.com/Coffee-Park-1013819342041065/"><div id="wb_facebook">
<img src="images/fb.png" id="facebook" alt=""></div></a>
<hr id="trai">
<div id="wb_titre2016">
<span style="color:#A4A4A4;font-family:Exo;font-size:17px;">coffeePark &#0169; 2016.</span></div>
<form action="abonner.php" method="POST">
<textarea name="TextArea1" id="TextArea1" rows="0" cols="26"></textarea>
<input class="btn shake-little"  type="submit" id="Button1" name="" value="S'abonner">
</form>
</div>
</div>

</body>
</html>