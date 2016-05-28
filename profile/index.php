<?phpsession_start?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title
<link href="fronte.css" rel="stylesheet">
<link href="page5.css" rel="stylesheet">
</head>
<?php


require('../connexion/session_verif.php');


 $host="localhost";
$user="root";
$password="";
 $dbname='com';
$id=$_GET['id'];
$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="select * from client where id=".$id;
$result=mysqli_query($cxn,$requete);
 while ($ligne=mysqli_fetch_array($result)){
?>
<body>
<div id="container">

<div id="Layer1" style="position:absolute;text-align:left;left:36%;top:94px;width:290px;height:193px;z-index:15;">
<div id="wb_Image5" style="position:absolute;left:145px;top:70px;width:20px;height:20px;z-index:0;">
<img src="../images/cal.png" id="Image5" alt=""></div>
<div id="wb_Text5" style="position:absolute;left:160px;top:138px;width:114px;height:16px;z-index:1;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:13px;">Date de naissance</span></div>

<div id="wb_Text1" style="position:absolute;left:174px;top:72px;width:112px;height:18px;z-index:2;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:16px;">Votre compte !</span></div>
<div id="wb_Text4" style="position:absolute;left:174px;top:100px;width:76px;height:30px;z-index:3;text-align:left;">
<span style="color:#4EB0CA;font-family:Arial;font-size:14px;"><?php echo $ligne['date'];?></span></div>
<div id="wb_Text3" style="position:absolute;left:160px;top:30px;width:146px;height:22px;z-index:4;text-align:left;">
<span style="color:#707070;font-family:Arial;font-size:19px;"><?php echo $ligne['nom'];?> </span></div>
<div id="wb_Image4" style="position:absolute;left:15px;top:29px;width:121px;height:121px;z-index:5;">
 <img src="../imageproduit/<?php echo $ligne['image'];?>" id="Image4" alt=""></div>
</div>
<div id="Layer2" style="position:absolute;text-align:left;left:31%;top:277px;width:362px;height:320px;z-index:16;">
 
<input name="TextArea1"  style="position:absolute;left:28px;top:198px;width:324px;height:31px;z-index:6;" rows="0" cols="29" value="<?php echo $ligne['telephone'];?>"/>
<input name="TextArea1" style="position:absolute;left:28px;top:144px;width:324px;height:31px;z-index:7;" rows="0" cols="29" value="<?php echo $ligne['ville'];?>"/>
<input name="TextArea1"  style="position:absolute;left:28px;top:90px;width:324px;height:31px;z-index:8;" rows="0" cols="29"value="<?php echo $ligne['prenom'];?>" />
<input name="TextArea1"  style="position:absolute;left:28px;top:36px;width:324px;height:31px;z-index:9;" rows="0" cols="29" value="<?php echo $ligne['nom'];?>"/>
<input name="TextArea1"  style="position:absolute;left:28px;top:250px;width:324px;height:31px;z-index:10;" rows="0" cols="29"value="<?php echo $ligne['email'];?>"/>
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:107px;top:0px;width:710px;height:74px;z-index:17;">
<div id="wb_Image6" style="position:absolute;left:0px;top:20px;width:127px;height:74px;z-index:11;">
<img src="../images/profil.png" id="Image6" alt=""></div>
<div id="wb_Text2" style="position:absolute;left:285px;top:40px;width:151px;height:19px;z-index:12;text-align:left;">
<span style="color:#F7F7F9;font-family:Arial;font-size:17px;"><strong><a href="../profile_historique/profile_historique.php?id=<?php echo $ligne['id'];?>">Historique</a></strong></span></div>
<div id="wb_Text6" style="position:absolute;left:559px;top:40px;width:151px;height:19px;z-index:13;text-align:left;">
<span style="color:#F7F7F9;font-family:Arial;font-size:17px;"><strong><a href="../profile_parametre/profile_param.php?id=<?php echo $ligne['id'];?>">Parameitre</a></strong></span></div>
</div>
</div>
<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:0px;width:100%;height:80px;z-index:1;">
</div>
</body>
<?php 

}

?>
</html>