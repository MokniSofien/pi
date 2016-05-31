<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<link href="fronte.css" rel="stylesheet">
<link href="liste_blog.css" rel="stylesheet">
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
<?php include('contact.php');?>
<body>
<div style="height:100%">
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
<div id="container">
<div id="wb_Text19" style="position:absolute;left:706px;top:92px;width:243px;height:16px;z-index:55;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:13px;">7 jours de 9:00 am à 7:00 pm</span></div>
<div id="wb_Text20" style="position:absolute;left:44px;top:92px;width:266px;height:16px;z-index:56;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">4578 marmora road ,val de marne paris 19</span></div>
<div id="wb_Text21" style="position:absolute;left:417px;top:92px;width:183px;height:16px;z-index:57;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">+ 33 0609 7429 99 </span></div>
<div id="wb_Image10" style="position:absolute;left: 388px; top: 86px;;width:60px;height:53px;z-index:58;">
<img src="../images/contact.png" id="Image10" alt=""></div>
<div id="wb_Image11" style="position:absolute;left: 680px;top: 90px;width:56px;height:38px;z-index:59;">
<img src="../images/conct.png" id="Image11" alt=""></div>
<div id="wb_Image12" style="position:absolute;left:27px;top:87px;    width: 29px; height: 48px;;z-index:60;">
<img src="../images/1tact.png" id="Image12" alt=""></div>
</div>





<div id="Layer4" style="position:absolute;text-align:center;left:0px;top:125px;width:100%;height:392px;z-index:61;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102239.40008064431!2d10.073237072471443!3d36.794999885812665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sTunis!5e0!3m2!1sfr!2stn!4v1462916613936" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<div id="Layer3" style="position:absolute;text-align:center;left:0px;top:517px;width:46%;height:516px;z-index:62;">
<div id="Layer3_Container" style="width:512px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<div id="wb_Image5" style="position:absolute;left:98px;top:122px;width:116px;height:110px;z-index:30;">
<img  style="    border-radius: 50%;"src="images/steve.jpg" id="Image5" alt=""></div>
<div id="wb_Text26" style="position:absolute;left:253px;top:164px;width:100px;height:16px;z-index:31;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Steven Hector</span></div>

<div id="wb_Text14" style="position:absolute;left:232px;top:132px;width:152px;height:22px;z-index:33;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:19px;"><strong>Web Master </strong></span></div>
<div id="wb_Text17" style="position:absolute;left:151px;top:291px;width:183px;height:16px;z-index:34;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">+ 33 0609 7429 99</span></div>
<div id="wb_Text15" style="position:absolute;left:151px;top:324px;width:191px;height:16px;z-index:35;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">7 jours de 9:00 am à 7:00 pm</span></div>
<div id="wb_Text16" style="position:absolute;left:151px;top:258px;width:266px;height:16px;z-index:36;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:13px;">4578 marmora road ,val de marne paris 19</span></div>
<div id="wb_Text18" style="position:absolute;left:151px;top:356px;width:122px;height:16px;z-index:37;text-align:left;">
<span style="color:#4eb1cb;font-family:Exo;font-size:13px;">CoffeePark@gmail.com</span></div>
<div id="wb_Image6" style="position:absolute;left:127px;top:260px;width:12px;height:12px;z-index:38;">
<img src="../images/p96jql65ow.jpg" id="Image6" alt=""></div>
<div id="wb_Image7" style="position:absolute;left: 114px; top: 286px;width:60px;height:53px;z-index:39;">
<img src="../images/contact.png" id="Image7" alt=""></div>
<div id="wb_Image8" style="position:absolute;left: 118px;top: 323px;width:56px;height:38px;z-index:40;">
<img src="../images/conct.png" id="Image8" alt=""></div>
<div id="wb_Image9" style="position:absolute;left:127px;top:360px;width:12px;height:12px;z-index:41;">
<img src="../images/4xnjbi2yek.jpg" id="Image9" alt=""></div>
</div>
</div>
<div id="Layer6" style="position:absolute;text-align:center;left:512px;top:517px;width:54%;height:516px;z-index:63;">
<div id="Layer6_Container" style="width:590px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text11" style="position:absolute;left:308px;top:60px;width:159px;height:24px;z-index:42;text-align:left;">
<span style="color:#000000;font-family:Exo;font-size:20px;"><strong>Contacter-Nous</strong></span></div>

<form action="contact_form.php" method="POST">
<input name="nom" id="TextArea7"type="text" style="position:absolute;left:194px;top:122px;width:352px;height:27px;z-index:43;" rows="0" cols="56" placeholder="Nom :" required="required">
<input name="email" id="TextArea2" type="email"style="position:absolute;left:194px;top:163px;width:352px;height:27px;z-index:44;" rows="0" cols="56" placeholder="Email :"required="required">
<input name="phone" id="TextArea3" type="number"style="position:absolute;left:194px;top:204px;width:352px;height:27px;z-index:45;" rows="0" cols="56" placeholder="Tel :"required="required">
<textarea name="message" id="TextArea4" type="text"style="position:absolute;left:194px;top:246px;width:352px;height:75px;z-index:46;" rows="3" cols="56" placeholder="Message :"required="required"></textarea>
<input class="btn shake-little"  type="submit" id="Button1" name="envoi" value="Envoyer" style="position:absolute;left:194px;top:356px;width:177px;height:38px;z-index:47;">

</form>
</div>
</div>



<div style="top:1000px;" id="footer">

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

</body>
</html>