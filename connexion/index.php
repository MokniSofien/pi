
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="fronte.css" rel="stylesheet">
<link href="page2.css" rel="stylesheet">
</head>
<?php
include_once ('login.php')


?>
<?php
 //session_start();
 
 
 if (@$_SESSION[connecte]=="ok!!")
{
	
	
		

}
else { }


?>
<body>
<div id="Layer1" style="margin: auto;position: relative;text-align: center;left:0%;top:0%;width:300px;height:300px;z-index:10;">


<div id="wb_Text1" style="position:absolute;left:97px;top:22px;width:103px;height:25px;z-index:1;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:20px;">Connexion</span></div>
<div id="wb_Text2" style="position:absolute;left:86px;top:238px;width:95px;height:15px;z-index:2;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:12px;">Rappelles toi</span></div>
<input type="checkbox" id="Checkbox1" name="Checkbox1" value="on" style="position:absolute;left:54px;top:234px;z-index:5;">


<form   action="index.php" method="POST">
<input name="email" id="TextArea1"type="email" style="position:absolute;left:54px;top:62px;width:188px;height:33px;z-index:3;" rows="0" cols="24" placeholder="  Nom utilisateur* " required="required">
<input name="pass" id="TextArea2" type="password" style="position:absolute;left:54px;top:113px;width:188px;height:33px;z-index:6;" rows="0" cols="24" placeholder="  Mot de passe*"required="required">
<input type="submit" id="Button2" name="inscrit" value="inscrit" style="position:absolute;left:130px;top:183px;width:70px;height:36px;z-index:0;">
<input type="submit" name="submit" id="Button1" name="" value="Valider" style="position:absolute;left:54px;top:183px;width:70px;height:36px;z-index:4;">
</form>



<div id="wb_Image1" style="position:absolute;left:60px;top:69px;width:18px;height:20px;z-index:7;">
<img src="images/log.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:60px;top:122px;width:16px;height:17px;z-index:8;">
<img src="images/pas.png" id="Image2" alt=""></div>
<div id="wb_Text3" style="position:absolute;left:54px;top:270px;width:216px;height:30px;z-index:9;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:12px;">Mot de passe oublier&nbsp; mot de passe ?<br></span></div>
</div>
</body>
</html>