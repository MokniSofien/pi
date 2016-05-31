<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="  ">
<link href="fronte.css" rel="stylesheet">
<link href="page1.css" rel="stylesheet">
</head>
<?php include('register.php');?>
<body>
<div id="container">
<div id="Layer1" style="position:relative;text-align:center;top:-30px;width:774px;height:700px;z-index:14;">
<div id="Layer1_Container" style="width:774px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<div id="wb_Image1" style="position:absolute;left:185px;top:54px;width:400px;z-index:1;">
<img src="images/logo_big.png" style="width:400px;" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:302px;top:140px;width:169px;height:19px;z-index:2;text-align:left;">

<span style="color:#4EB0CA;font-family:Exo;font-size:16px;"><strong>Créez votre compte !</strong></span></div>
<form method="POST" action="page1.php">
<input name="nom" id="TextArea7" style="position:absolute;left:208px;top:177px;width:352px;height:27px;z-index:3;" rows="0" cols="56" placeholder="Nom *"  required="required">
<input name="prenom" id="TextArea1" style="position:absolute;left:208px;top:218px;width:352px;height:27px;z-index:4;" rows="0" cols="56" placeholder="Pr&#233;nom *"required="required">

<input name="email" id="TextArea2" style="position:absolute;left:208px;top:259px;width:352px;height:27px;z-index:5;" rows="0" cols="56" placeholder="Email *"required="required">
<input name="pass" id="TextArea3" style="position:absolute;left:208px;top:301px;width:352px;height:27px;z-index:6;" rows="0" cols="56" placeholder="Mot de passe *">
<input name="confirm_pass" id="TextArea" style="position:absolute;left:208px;top:343px;width:352px;height:27px;z-index:7;" rows="0" cols="56" placeholder="Comfirmer mot de passe *"required="required">
<input name="telephone" id="TextArea5" style="position:absolute;left:208px;top:382px;width:352px;height:27px;z-index:8;" rows="0" cols="56" placeholder="Telephone"required="required">
<input name="pays" id="TextArea6" style="position:absolute;left:208px;top:424px;width:115px;height:27px;z-index:9;" rows="0" cols="17" placeholder="Pays *"required="required">
<select name="ville" size="2" id="Combobox1" style="position:absolute;left:331px;top:424px;width:110px;height:34px;z-index:10;"required="required">
<option value="Ville">Tunis</option>
 <option value="Ville">Ariana</option>
  <option value="Ville">Ben Arous</option>
  <option value="Ville">Nabeul</option>
</select>
<textarea name="postal" id="TextArea9" style="position:absolute;left:445px;top:424px;width:115px;height:27px;z-index:11;" rows="0" cols="17" placeholder="Code postal *"></textarea>
<input type="reset" id="Button2" name="Quiter" value="Quiter" style="position:absolute;left:403px;top:481px;width:161px;height:25px;z-index:12;">
<input class="btn shake-little"  type="submit" id="Button1" name="valider" value="Valider" style="position:absolute;left:206px;top:481px;width:161px;height:25px;z-index:13;">
</form>
</div>
</div>
</div>
</body>
</html>