<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="fronte.css" rel="stylesheet">
<link href="page12.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../pop.css" rel="stylesheet">
<link href="../foo.css" rel="stylesheet">
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
</head>
<body>
<div style="hieght:100%">
<div id="container">
<div id="wb_Text11">
<span style="color:#4BB1CB;font-family:Exo;font-size:22px;"><strong>CoffeePark vous offre une solution de gestion pour vos cafés </strong></span></div>
<div id="Layer3">
<div id="Layer3_Container">
<a onclick="change1()" >
<div id="Layer4">
<div id="Layer4_Container">
<div id="wb_Text12">
<span style="color:#000000;font-family:Exo;font-size:13px;">L’outil de gestion de ressources humaines offre à l’utilisateur la possibilité de bien gérer son personnel ; à travers une interface simple à utiliser, l’utilisateur peut consulter la liste de ses fonctionnaires avec leurs différents détails : nom, photo, type de contrat, fonction, email…<br>A travers un système d’information 100% digitale la gestion des congés du personnel se fait par un simple clic : Un fonctionnaire n’a que déposer une demande de congé et son supérieur devra décider de la lui accorder ou pas.</span></div>
<div id="wb_Text13">
<span style="color:#4BB1CB;font-family:Exo;font-size:15px;"><strong>Gestion des ressources humaines </strong></span></div>
<div id="wb_Image5">
<img src="../images/tte.png" id="Image5" alt=""></div>
<div id="wb_Image10">
<img src="images/resource.png" id="Image10" alt=""></div>
</div>
</div> </a>
<a onclick="change2()" >
<div id="Layer6">

<div id="Layer6_Container">
<div id="wb_Text18">
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">Gérez vos produits et les articles destinés à la vente et suivez votre stock en temps réel.</span></div>
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">Coffee Park&nbsp; vous permet d'identifier plusieurs&nbsp; types de produits lors de leur création :</span></div>
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">Produit simple : produits intégrés au stock et pouvant être vendus immédiatement ou </span></div>
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">utilisés dans une recette.</span></div>
</div>
<div id="wb_Image12">
<img src="images/produit.png" id="Image12" alt=""></div>
<div id="wb_Text14">
<span style="color:#4BB1CB;font-family:Exo;font-size:15px;"><strong>Gestion de stock</strong></span></div>
<div id="wb_Image9">
<img src="../images/valiz.png" id="Image9" alt=""></div>
</div>
</div>

</a>
<a onclick="change3()" >
<div id="Layer7">
<div id="Layer7_Container">
<div id="wb_Image8">
<img src="../images/lamp.png" id="Image8" alt=""></div>
<div id="wb_Text15">
<span style="color:#4BB1CB;font-family:Exo;font-size:15px;"><strong>Gestion des produits</strong></span></div>
<div id="wb_Text20">
<span style="color:#000000;font-family:Exo;font-size:13px;">qui regroupe tous les produits de l’entreprise et les données qui leurs sont propres tels que le code, la catégorie, la taxe … Pour chaque produit il y a une liberté de le voir plus en détail, de le modifier ou bien de le supprimer de la liste.</span></div>
<div id="wb_Image14">
<img src="images/fonctionnalites gestion avec rectangle.png" id="Image14" alt=""></div>
</div>
</div>

</a>
<a onclick="change4()" >
<div id="Layer8">
<div id="Layer8_Container">
<div id="wb_Text22">
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">Ici vous pouvez accéder à tous les informations liées à l'inventaire tel que le mouvement de</span></div>
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">l'inventaire&nbsp; et la liste des retour casses.</span></div>
</div>
<div id="wb_Image16">
<img src="images/inventaire avec rectangle.png" id="Image16" alt=""></div>
<div id="wb_Text16">
<span style="color:#4BB1CB;font-family:Exo;font-size:15px;"><strong>gestion de l'inventaire </strong></span></div>
<div id="wb_Image7">
<img src="../images/ss.png" id="Image7" alt=""></div>
</div>
</div>

</a>
<a onclick="change5()" >
<div id="Layer9">
<div id="Layer9_Container">
<div id="wb_Text24">
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">ici vous trouvez le menu de gestion de commande où vous pouvez accéder a tous les informations</span></div>
<div style="margin-left:18px;"><span style="color:#000000;font-family:Exo;font-size:13px;">liées au commande.</span></div>
</div>
<div id="wb_Image18">
<img src="images/stock.png" id="Image18" alt=""></div>
<div id="wb_Image6">
<img src="../images/no.png" id="Image6" alt=""></div>
<div id="wb_Text17">
<span style="color:#4BB1CB;font-family:Exo;font-size:15px;"><strong>gestion de commandes</strong></span></div>
</div>
</div>

</a>
</div>
</div>
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
<div id="footer"  
   style=" margin-top: 200px;
    position: relative;
    top: auto;
    bottom: 0 !important;">

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
<script>
document.getElementById('Layer4').height = '50px' ;
document.getElementById('Layer6').height = '50px' ;
document.getElementById('Layer7').height = '50px' ;
document.getElementById('Layer8').height = '50px' ;
document.getElementById('Layer9').height = '50px' ;
function change1() 
{
    var taille = document.getElementById('Layer4');
	taille.style.overflow = 'hidden' ;
    if (taille.style.height=="50px") {
	taille.style.height = '330px' ;
	
        
    } else {
	taille.style.height = '50px' ;
	
        
    }  
    }  
	function change2() {
	 var taille = document.getElementById('Layer6');
	 taille.style.overflow = 'hidden' ;
    if (taille.style.height=="50px") {
	taille.style.height = '330px' ;
		
        
    } else {
	taille.style.height = '50px' ;
	
        
    } 
    } 
	function change3() {
	 var taille = document.getElementById('Layer7');
	 taille.style.overflow = 'hidden' ;
    if (taille.style.height=="50px") {
	taille.style.height = '330px' ;
		
        
    } else {
	taille.style.height = '50px' ;
	
        
    }  
    }  
	function change4() {
	 var taille = document.getElementById('Layer8');
	 taille.style.overflow = 'hidden' ;
    if (taille.style.height=="50px") {
	taille.style.height = '330px' ;
		
        
    } else {
	taille.style.height = '50px' ;
	
        
    }  
    }  
	function change5() {
	var taille = document.getElementById('Layer9');
	taille.style.overflow = 'hidden' ;
    if (taille.style.height=="50px") {
	taille.style.height = '330px' ;
	
        
    } 
	else {
	taille.style.height = '50px' ;
	
        
    }  
    }  

</script>
</div>
</body>
</html>