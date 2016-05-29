<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="fronte.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
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
function Validatepage1(theForm)
{
   var regexp;
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (theForm.TextArea2.value.length != 0 && !regexp.test(theForm.TextArea2.value))
   {
      alert("Please enter a valid email address.");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}
</script>

<style>

	</style>
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
<input name="requete" id="TextArea1" style="overflow: hidden; position:absolute;left:4px;top:7px;width:179px;height:12px;z-index:0;" rows="0" cols="27"></textarea>
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

<a>
<div id="top">
<div id="page1">
<div id="page1_Container">
<div id="wb_Text7">
<span style="color:#4EB0CA;font-family:Arial;font-size:20px;">Demandez votre version d’essaie gratuitement ( 30 Jours)</span></div>
<div id="wb_Text6">
<span style="color:#FFFFFF;font-family:Arial;font-size:27px;">Solution de gestion des Restos Café Lounge</span></div>
<div id="Layer4">
<div id="Layer4_Container">
</div>
</div>
<form action="abonner.php" method="POST">
<textarea name="email" id="TextArea2" rows="0" cols="41" placeholder="E-mail" required="required">   E-mail</textarea>
<input name="submit" type="submit" id="Button1" name="" value="ESSAYER">
</form>
</div>
</div>
</div>
<div id="Layer3" title="page2">
<div id="Layer3_Container">
<div id="wb_Text9">
<span style="color:#000000;font-family:Arial;font-size:20px;">Gérez vos points de vente en simple clique</span></div>
<div id="Layer7">
<div id="wb_Text13">
<span style="color:#505050;font-family:Exo;font-size:13px;">Coffee Park vous offre une solution de gestion adaptable selon vos supports</span></div>
<div id="wb_Text14">
<span style="color:#505050;font-family:Exo;font-size:19px;">Solution de gestion des Restos Café Lounge </span></div>
<div id="wb_Image6">
<img src="images/box.png" id="Image6" alt=""></div>
</div>
<div id="Layer6">
<div id="wb_Text11">
<span style="color:#505050;font-family:Exo;font-size:13px;">Coffee Park vous offre une solution de gestion adaptable selon vos supports</span></div>
<div id="wb_Text12">
<span style="color:#505050;font-family:Exo;font-size:19px;">Analyse et rapports adapter à a vos besoins</span></div>
<div id="wb_Image5">
<img src="images/wifi.png" id="Image5" alt=""></div>
</div>
<div id="Layer5">
<div id="wb_Image4">
<img src="images/ec.png" id="Image4" alt=""></div>
<div id="wb_Text8">
<span style="color:#505050;font-family:Exo;font-size:19px;">Solution de gestion des Restos Café Lounge </span></div>
</div>
<div id="wb_Text10">
<span style="color:#505050;font-family:Exo;font-size:13px;">Coffee Park vous offre une solution de gestion adaptable selon vos supports</span></div>
</div>
</div>
<div id="Layer8" title="page2">
<div id="Layer8_Container">
<div id="Layer14">
<div id="Layer14_Container">
<div id="wb_Text16">
<span style="color:#4EB1CB;font-family:Exo;font-size:16px;">Coffee Park </span><span style="color:#000000;font-family:Exo;font-size:16px;"><br></span><span style="color:#5B5B5B;font-family:Exo;font-size:12px;">vous offres une solution de gestion&nbsp; ALL-IN-ONE</span></div>
<div id="Layer15">
<a onclick="changeme()"><div id="Layer16">
<div id="wb_Text17">
<span  style="color:#5B5B5B;font-family:Exo;font-size:12px;">+ Gestion des commande</span>
</div></div></a>

<div id="com">
<div id="wb_Text17">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">Coffee park vous offes la possiblité de gérer vos commande temp</span></div>
</div>
<a onclick="changeme1()">
<div id="Layer17">
<div id="wb_Text18">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">+ Gestion Ressources Humaines</span></div>
</div></a>
<div id="com1">
<div id="wb_Text17">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">Coffee park vous offes la possiblité de gérer vos commande temp</span></div>
</div>
<a onclick="changeme2()">
<div id="Layer18">
<div id="wb_Text19">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">+ Gestion des Produits</span></div>
</div></a>
<div id="com2">
<div id="wb_Text17">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">Coffee park vous offes la possiblité de gérer vos commande temp</span></div>
</div>
<a onclick="changeme3()">
<div id="Layer19">
<div id="wb_Text20">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">+ Gestion des Stock</span></div>
</div></a>

<div id="com3">
<div id="wb_Text17">
<span style="color:#5B5B5B;font-family:Exo;font-size:12px;">Coffee park vous offes la possiblité de gérer vos commande temp</span></div>
</div>

</div>
</div>
</div>
</div>
</div>
<div id="Layer9" title="page2">
<div id="Layer9_Container">
<div id="wb_Text15">
<span style="color:#FFFFFF;font-family:Exo;font-size:21px;">Appelle à l'action&nbsp; + 216 883 883</span></div>
</div>
</div>
<div id="Layer10" title="page2">
<div id="Layer10_Container">
<div id="wb_Image9">
<img src="images/image3%20partie%20blog.png" id="Image9" alt=""></div>
<div id="wb_Image8">
<img src="images/image2%20partie%20blog.png" id="Image8" alt=""></div>
<div id="wb_Image7">
<img src="images/image1%20partie%20blog.png" id="Image7" alt=""></div>
<div id="wb_Text21">
<span style="color:#5B5B5B;font-family:Exo;font-size:13px;">En 2016, soyez plus productif avec Coffeepark!Coffeepark démarr</span></div>
<div id="wb_Text22">
<span style="color:#5B5B5B;font-family:Exo;font-size:13px;">En 2016, soyez plus productif avec Coffeepark!Coffeepark démarr</span></div>
<div id="wb_Text23">
<span style="color:#5B5B5B;font-family:Exo;font-size:13px;">En 2016, soyez plus productif avec Coffeepark!Coffeepark démarr</span></div>
<div id="wb_Image11">
<img src="images/admin.png" id="Image11" alt=""></div>
<div id="wb_Image10">
<img src="images/cal%20min.png" id="Image10" alt=""></div>
<div id="wb_Text24">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
<div id="wb_Text25">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
<div id="wb_Text26">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
<div id="wb_Image12">
<img src="images/cal%20min.png" id="Image12" alt=""></div>
<div id="wb_Image13">
<img src="images/admin.png" id="Image13" alt=""></div>
<div id="wb_Text27">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
<div id="wb_Text28">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
<div id="wb_Image14">
<img src="images/cal%20min.png" id="Image14" alt=""></div>
<div id="wb_Image15">
<img src="images/admin.png" id="Image15" alt=""></div>
<div id="wb_Text29">
<span style="color:#4EB1CB;font-family:Arial;font-size:8px;">Demo user</span></div>
</div>
</div>
<div id="Layer11" title="page2">
<div id="Layer11_Container">
<div id="Layer20">
	<form   action="login.php" method="POST">

<input name="email" type="email" id="TextArea3" rows="0" cols="40" placeholder="  E-mail" required="required">
<input name="pass"  type="password" id="TextArea4" rows="0" cols="40" placeholder="  Mot de passe" required="required">
<input name="submit" type="submit" id="Button2"  value="Submit">
</form>
</div>
</div>
</div>
<div id="Layer12" title="page2">
<div id="Layer12_Container">
<div id="wb_Image16">
<img src="images/pccc.png" id="Image16" alt=""></div>
<div id="Layer21">
<div id="Layer21_Container">
<div id="wb_Text30">
<span style="color:#5B5B5B;font-family:Exo;font-size:20px;">Vous souhaitez une démonstration gratuite ?</span><span style="color:#5B5B5B;font-family:Exo;font-size:17px;"><br></span><span style="color:#5B5B5B;font-family:Exo;font-size:12px;"><br></span><span style="color:#5B5B5B;font-family:Exo;font-size:16px;">On vous montre comment CoffeePark peut facilement s’adapter à votre besoin<br>sans boulverser vos habitudes</span></div>
<a href="../presentation/"><input type="submit" id="Button3" name="" value="Je veux une démo"></a>
</div>
</div>
</div>
</div>
<div id="Layer13" title="page2">
<div id="Layer13_Container">
<div id="wb_Image17">
<div>
<span id="rea" style="color:#FFF;font-family:Exo;font-size:21px;">Réalisations</span>
</div>
<img src="images/U.png" id="Image17" alt=""></div>
</div>
</div>
<div id="PageFooter1">
<div id="PageFooter1_Container">
<div id="Layer22">
<<<<<<< HEAD
<div id="wb_Text31">
<span style="color:#707070;font-family:Arial;font-size:13px;">cofeepark &#0169; 2015. </span></div>
<div id="wb_Text32">
<span style="color:#707070;font-family:Arial;font-size:13px;">Mon-Sat 8:00 am to 8:00 pm</span></div>
<div id="wb_Text33">
<span style="color:#707070;font-family:Arial;font-size:13px;"> 800-2345-678;&nbsp; 800-2345-679</span></div>
<div id="wb_Text34">
<span style="color:#4EB0CA;font-family:Arial;font-size:20px;">Get In Touch With Us</span></div>
<div id="wb_Text35">
<span style="color:#707070;font-family:Arial;font-size:13px;">4578 Marmora Road,Glasgow D04 89GR</span></div>
<div id="wb_Image18">
<img src="images/phone.png" id="Image18" alt=""></div>
=======




<div id="wb_Text32">
<span style="color:#707070;font-family:Exo;font-size:13px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Instituit contemnere sapienti accessio dignitatis vera. Grate usus terrore evolutio libris officii defatigatio, amaret efficeretur tibique quietus videri vexetur, choro. Fallare, patre pertinacia.</span></div>

<div id="wb_Text34">
<span style="color:#707070;font-family:Exo;font-size:20px;">ABONNER VOUS A NOTRE <br> NEWS LETTER</span>
<input name="text" id="TextArea40"type="email" required="required" placeholder="Abonnez-vous">
<input name="submit"id="TextArea41" id="TextArea41"type="submit" value="S'abonner">

>>>>>>> origin/master
</div>



</div>
<div id="wb_Image18">
<img src="images/fb.png" id="Image18" alt=""></div>
<div id="wb_Text40">
<span style="color:#707070;font-family:Exo;font-size:20px;">COFEE <b>PARK</b></span></div>
<div id="wb_Text35">
<span style="color:#707070;font-family:Exo;font-size:20px;"><b>CONTACTER</b>-NOUS</span></div>
<div id="wb_Text42">
<span style="color:#707070;font-family:Exo;font-size:13px;">ADRESSE : LE BARDO </span></div>
<div id="wb_Text33">
<span style="color:#707070;font-family:Exo;font-size:13px;"> TEL : 71 531 745</span></div>
</div>
<div id="wb_Text31">
<span style="color:#707070;font-family:Exo;font-size:13px;">coffeePark &#0169; 2016. </span></div>
<hr id="Line1"></div>
<script>
function changeme() {
    var taille = document.getElementById('com');
    if (taille.style.height=="0px") {
	taille.style.height = '40px' ;
	taille.style.margin = '10px' ;
	
        
    } else {
	taille.style.height = '0px' ;
	taille.style.margin = '0px' ;
	
        
    }  
}
function changeme1() {
    var taille = document.getElementById('com1');
    if (taille.style.height=="0px") {
	taille.style.height = '40px' ;
	taille.style.margin = '10px' ;	
        
    } else {
	taille.style.height = '0px' ;
	taille.style.margin = '0px' ;
        
    }  
}
function changeme2() {
    var taille = document.getElementById('com2');
    if (taille.style.height=="0px") {
	taille.style.height = '40px' ;
	taille.style.margin = '10px' ;	
        
    } else {
	taille.style.height = '0px' ;
	taille.style.margin = '0px' ;
        
    }  
}
function changeme3() {
    var taille = document.getElementById('com3');
    if (taille.style.height=="0px") {
	taille.style.height = '40px' ;
	taille.style.margin = '10px' ;	
	taille.style.display= 'block';
        
    } else {
	taille.style.height = '0px' ;
	taille.style.margin = '0px' ;
    taille.style.display= 'none';   
    }  
}
</script>
</body>
</html>