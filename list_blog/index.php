<!doctype html>
<html>
<head>

<content="text/html; charset=utf8" />
<title>Untitled Page</title>
  
<link href="fronte.css" rel="stylesheet">
<link href="liste_blog.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
<link href="../pop.css" rel="stylesheet">
<link href="../foo.css" rel="stylesheet">
<script>
<!-- condition input --> 
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
<!-- header-->

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
<div id="wb_Text19" style="position:absolute;left:518px;top:167px;width:54px;height:23px;z-index:51;text-align:left;">
<span style="color:#50B5D8;font-family:Exo;font-size:20px;">Blog</span></div>



<div id="Layer4" >
<?php 

$host="localhost";
$user="root";
$password="";
$dbname="com";
$cnx=mysqli_connect($host,$user,$password,$dbname);
$requete="SELECT * FROM article";
$result=mysqli_query($cnx,$requete);
while($ligne=mysqli_fetch_array($result))
{
?>
<div id="article" >
<div id="wb_Text27" >
<span style="color:#000000;font-family:Exo;font-size:13px;"><em> 
<?php echo substr($ligne['text'],0,30)?>[...]</em></span></div>
<div id="wb_Text24">
<span style="color:#50B5D8;font-family:Exo;font-size:16px;"><?php echo $ligne['titre']?></span></div>
<div id="wb_Text25" >
<span style="color:#50B5D8;font-family:Exo;font-size:13px;"><?php echo $ligne['auteur']?></span></div>
<div id="wb_Image7" >
<img src="../images/cal%20min.png" id="Image7" alt=""></div>
<div id="wb_Image6" >
<img src="../images/min%20admin.png" id="Image6" alt=""></div>
<div id="wb_Text26" >
<span style="color:#50B5D8;font-family:Exo;font-size:13px;"><?php echo $ligne['date']?></span></div>
<div id="wb_Image13" >
<a href="../blog/index.php?id=<?php echo $ligne['id'];?>"><img src="../../admin/imageproduit/<?php echo $ligne['image'];?>"id="Image13" alt="" /></a></div>
</div>
<?php } ?>
</div>
</div>


<!--footer-->
<div id="footer"style="
    top: 1550px;
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
<input class="btn shake-little"  type="submit" id="Button1" name="" value="S'abonnert">
</form>
</div>
</div>


<!--end  footer-->
</body>
</html>