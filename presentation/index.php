<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="fronte.css" rel="stylesheet">
<link href="page11.css" rel="stylesheet">
<link href="../head.css" rel="stylesheet">
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
<style>
<!-- style ta3 el login --> 
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

</div>


<!-- header-->

<!-- header-->
<div id="PageHeader1"style="overflow:none;" >
<div id="wb_Image1" >
<img src="../images/logg.png" id="Image1" alt=""></div>
<div id="PageHeader1_Container" style="width:1091px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<div id="Layer1" >





<iframe id="me" src="../menu/"></iframe>










<div id="Layer2" >
  <form action="../acceuil/recherche.php" method="POST"> 
<input name="requete" id="TextArea1" style="overflow: hidden; position:absolute;left:4px;top:7px;width:179px;height:12px;z-index:0;" rows="0" cols="27"></textarea>
<div id="wb_Image2" >

  <button name="submit" type="submit" value="valider" style=" background-color: transparent; border: none;">
<img style="    width: 15px;"src="../images/recheche.png" id="Image2" alt=""></button>
</form></div>
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


<div id="Layer6">
<div id="Layer3">
<div id="wb_Image5">

<img onclick="changeImagee()" src="../images/Show.png" id="Image5" alt=""></div>
<div id="wb_Text13">
<span style="color:#000000;font-family:Arial;font-size:13px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna <br><br>praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus,<br><br> cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit<br><br> facilisi, mi mattis pariatur aliquam pharetra eget.<br><br><br><br>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna <br><br>praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus,<br><br> cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit<br><br> facilisi, mi mattis pariatur aliquam pharetra eget.<br><br><br><br><br>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna <br><br>praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus,<br><br> cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit<br><br> facilisi, mi mattis pariatur aliquam pharetra eget.</span></div>
<div id="wb_Image7">
<img  src="../images/gea1.png" id="Image7" alt=""></div>
<div id="wb_Text12">
<span style="color:#00BFFF;font-family:Arial;font-size:16px;"><strong>Présentation </strong></span></div>
<hr id="Line1">
</div>



<div id="Layer4">
<div id="wb_Image5">

<img onclick="changeImage()" src="../images/Show.png" id="Image_5" alt=""> </div>
<div id="wb_Text12">
<span style="color:#00BFFF;font-family:Arial;font-size:16px;"><strong>Démonstration</strong></span></div>
<hr id="Line1">
<div id="wb_Image7">
<img src="../images/gea1.png" id="Image8" alt=""></div>

<div id="wb_Image6">
<img src="../images/pcc.png" id="Image6" alt=""></div>
</div>





</div>
<div id="PageFooter1">
<div id="PageFooter1_Container">
<div id="Layer5">
<div id="wb_Text9">
<span style="color:#707070;font-family:Arial;font-size:13px;">cofeepark &#0169; 2015. </span></div>
<div id="wb_Text8">
<span style="color:#707070;font-family:Arial;font-size:13px;">Mon-Sat 8:00 am to 8:00 pm</span></div>
<div id="wb_Text10">
<span style="color:#707070;font-family:Arial;font-size:13px;"> 800-2345-678;&nbsp; 800-2345-679</span></div>
<div id="wb_Text6">
<span style="color:#4EB0CA;font-family:Arial;font-size:20px;">Get In Touch With Us</span></div>
<div id="wb_Text7">
<span style="color:#707070;font-family:Arial;font-size:13px;">4578 Marmora Road,Glasgow D04 89GR</span></div>
<div id="wb_Image4">
<img src="../images/phone.png" id="Image4" alt=""></div>
</div>
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