<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="fronte.css" rel="stylesheet">
<link href="page11.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../pop.css" rel="stylesheet">
<link href="../foo.css" rel="stylesheet">
<link href="csshake-rotate.min.css" rel="stylesheet">
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
<div id="container">

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


<div id="Layer6">
<div id="Layer3">

<img src="../images/pcc.png" id="Image6" alt=""></div>
<div style="    position: absolute;
    top: 180px;
    left: 120px;">
<span style="color:#4EB0CA ;font-family:Exo;font-size:19px;" >CoffeePark</span>
</div>
<div id="wb_Text13" style="    text-align: justify;">
<span style="color:#cecece;font-family:Exo;font-size:15px;">COFFEE PARK  a pour objectif la réalisation et la commercialisation d’une nouvelle génération des applications de gestion basée sur des technologies, Cloud computing, des solutions de communication et de présentation innovantes afin de garantir aux utilisateurs la flexibilité et la clarté de l’information ainsi la planification des ressources de l’organisme.

En effet, notre site  propose la vente de cette dernière  en 3  versions (Basique, entreprise et business) destinées aux professionnels.

Il est important pour les cafés d’adopter des outils professionnels qui leur font gagner du temps et leur facilitent l'interaction entre la direction, les membres de l’équipe et les différents interlocuteurs d’un café.</span></div>
 <div id="wb_Texts">
<video width="100%" height="100%" controls>
  <source src="demo hend000.mp4" type="video/mp4">

</video></div>

<div id="wb_Text12">
<span style="color:#8c8c8c;font-family:Exo;font-size:32px;"><strong><FONT COLOR="#4eb1cb" >Présentation </font>& démonstration  </strong></span>
<hr id="Line1">
</div>

</div>



<div id="Layer4">

<div id="wb_Text122">
<span style="color:#4EB0CA ;font-family:Exo;font-size:26px;"><strong>Essayer gratuitement</strong></span></div>







<input class="btn shake-little"  type="submit" onclick="location.href='../lancement/'"  id="Button1" name="envoi" value="Essayer"  style="
    border: 2px #4EB0CA solid;
    -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
    border-radius: 1px;
    background-color: transparent;
    color: #4EB0CA;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
	position:relative;
	left:29%;
	width:255px;
	height:35px;
	top:100px;">
	
	
<input class="btn shake-little"  type="submit" onclick="location.href='../tarif/'";  id="Button2" name="envoi" value="Commander"  style="
    border: 2px #4EB0CA solid;
    -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
    border-radius: 1px;
    background-color: transparent;
    color: #4EB0CA;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
	position:relative;
	left:32%;
	width:255px;
	height:35px;
	
	top:100px;">




</div>

<div id="footer"style="
    top: 1000px;
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
<textarea name="TextArea1" id="TextArea1" rows="0" cols="26"></textarea>
<input class="btn shake-little"  type="submit" id="Button1" name="" value="S'abonner">
</form>
</div>
</div>



<script>
function changeImagee() {
    var image = document.getElementById('Image5');
    if (image.getAttribute('src')=="../images/hide.png") {
	document.getElementById('Layer3').style.height = '790px' ; 
        image.src = "../images/Show.png";
    } else {
	document.getElementById('Layer3').style.height = '150px' ;
        image.src = "../images/hide.png";
    }
}
</script>
<script>
function changeImage() {
    var image = document.getElementById('Image_5');
    if (image.getAttribute('src')=="../images/hide.png") {
	document.getElementById('Layer4').style.height = '790px' ; 
        image.src = "../images/Show.png";
    } else {
	document.getElementById('Layer4').style.height = '150px' ;
        image.src = "../images/hide.png";
    }
}
</script>
</body>
</html>