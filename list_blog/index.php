<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
  
<link href="fronte.css" rel="stylesheet">
<link href="liste_blog.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
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





<div id="container">
<div id="wb_Text19" style="position:absolute;left:518px;top:167px;width:54px;height:23px;z-index:51;text-align:left;">
<span style="color:#50B5D8;font-family:Arial;font-size:20px;">Blog</span></div>



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
<span style="color:#000000;font-family:Arial;font-size:13px;"><em> 
<?php echo substr($ligne['text'],0,30)?>[...]</em></span></div>
<div id="wb_Text24">
<span style="color:#50B5D8;font-family:Arial;font-size:16px;"><?php echo $ligne['titre']?></span></div>
<div id="wb_Text25" >
<span style="color:#50B5D8;font-family:Arial;font-size:13px;"><?php echo $ligne['auteur']?></span></div>
<div id="wb_Image7" >
<img src="../images/cal%20min.png" id="Image7" alt=""></div>
<div id="wb_Image6" >
<img src="../images/min%20admin.png" id="Image6" alt=""></div>
<div id="wb_Text26" >
<span style="color:#50B5D8;font-family:Arial;font-size:13px;"><?php echo $ligne['date']?></span></div>
<div id="wb_Image13" >
<a href="../blog/index.php?id=<?php echo $ligne['id'];?>"><img src="../../admin/imageproduit/<?php echo $ligne['image'];?>"id="Image13" alt="" /></a></div>
</div>
<?php } ?>
</div>
</div>


<!--footer-->
<div id="PageFooter1" >
<div id="PageFooter1_Container" style="width:1091px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="Layer5" style="position:absolute;text-align:left;left:339px;top:21px;width:413px;height:146px;z-index:50;">
<div id="wb_Text9" style="position:absolute;left:148px;top:127px;width:126px;height:16px;z-index:44;text-align:left;">
<span style="color:#707070;font-family:Arial;font-size:13px;">cofeepark &#0169; 2015. </span></div>
<div id="wb_Text8" style="position:absolute;left:116px;top:69px;width:191px;height:16px;z-index:45;text-align:left;">
<span style="color:#707070;font-family:Arial;font-size:13px;">Mon-Sat 8:00 am to 8:00 pm</span></div>
<div id="wb_Text10" style="position:absolute;left:116px;top:95px;width:183px;height:16px;z-index:46;text-align:left;">
<span style="color:#707070;font-family:Arial;font-size:13px;"> 800-2345-678;&nbsp; 800-2345-679</span></div>
<div id="wb_Text6" style="position:absolute;left:105px;top:0px;width:204px;height:23px;z-index:47;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:20px;">Get In Touch With Us</span></div>
<div id="wb_Text7" style="position:absolute;left:78px;top:43px;width:266px;height:16px;z-index:48;text-align:left;">
<span style="color:#707070;font-family:Arial;font-size:13px;">4578 Marmora Road,Glasgow D04 89GR</span></div>
<div id="wb_Image4" style="position:absolute;left:99px;top:95px;width:17px;height:16px;z-index:49;">
<img src="../images/phone.png" id="Image4" alt=""></div>
</div>
</div>
</div>


<!--end  footer-->
</body>
</html>