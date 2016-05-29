<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
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
<span style="color:#4EB0CA;font-family:Exo;font-size:13px;">Date de naissance</span></div>

<div id="wb_Text1" style="position:absolute;left:174px;top:72px;width:112px;height:18px;z-index:2;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:16px;">Votre compte !</span></div>
<div id="wb_Text4" style="position:absolute;left:174px;top:100px;width:76px;height:30px;z-index:3;text-align:left;">
<span style="color:#4EB0CA;font-family:Exo;font-size:14px;"><?php echo $ligne['date'];?></span></div>
<div id="wb_Text3" style="position:absolute;left:160px;top:30px;width:146px;height:22px;z-index:4;text-align:left;">
<span style="color:#707070;font-family:Exo;font-size:19px;"><?php echo $ligne['nom'];?> </span></div>
<div id="wb_Image4" style="position:absolute;left:15px;top:29px;width:121px;height:121px;z-index:5;">
 <img src="../imageproduit/<?php echo $ligne['image'];?>" id="Image4" alt=""></div>
</div>

<div id="Layer2" style="position:absolute;text-align:left;left:31%;top:277px;width:362px;height:398px;z-index:18;">
 <form action="modifier_profile.php" method="POST" enctype="multipart/form-data">
<input name="id"  type="hidden" value="<?php echo $ligne['id'];?>"/>
 <label  style="position:absolute;right:130px;top:205px;width:256px;height:31px;z-index:6;"><b>Telephone:</b> </label><input name="telephone" type="number"style="position:absolute;left:55px;top:198px;width:256px;height:31px;z-index:6;" rows="0" cols="29" value="<?php echo $ligne['telephone'];?>"required="required"/>
 <label  style="position:absolute;right:130px;top:155px;width:256px;height:31px;z-index:6;"><b>Ville:</b> </label><input name="ville"type="text" style="position:absolute;left:55px;top:144px;width:256px;height:31px;z-index:7;" rows="0" cols="29" value="<?php echo $ligne['ville'];?>"required="required"/>
 <label  style="position:absolute;right:130px;top:100px;width:256px;height:31px;z-index:6;"><b>prenom:</b> </label><input name="prenom"type="text"  style="position:absolute;left:55px;top:90px;width:256px;height:31px;z-index:8;" rows="0" cols="29"value="<?php echo $ligne['prenom'];?>"required="required" />
 <label  style="position:absolute;right:130px;top:50px;width:256px;height:31px;z-index:6;"><b>Nom:</b> </label><input name="nom" type="text" style="position:absolute;left:55px;top:36px;width:256px;height:31px;z-index:9;" rows="0" cols="29" value="<?php echo $ligne['nom'];?>"required="required"/>
 <label  style="position:absolute;right:130px;top:255px;width:256px;height:31px;z-index:6;"><b>Email:</b> </label><input name="email"type="email"  style="position:absolute;left:55px;top:250px;width:256px;height:31px;z-index:10;" rows="0" cols="29"value="<?php echo $ligne['email'];?>"required="required"/>
 <label  style="position:absolute;right:130px;top:305px;width:256px;height:31px;z-index:6;"><b> Image:</b> </label><input name="Image" type="File"  style="position:absolute;left:55px;top:305px;width:256px;height:31px;z-index:10;" rows="0" cols="29"value="<?php echo $ligne['email'];?>"required="required"/>
<input type="reset" id="Button2" name="Quiter" value="Quiter" style="position:absolute;left:202px;top:340px;width:111px;height:25px;z-index:11;">
<input type="submit" id="Button1" name="Valider" value="Valider" style="position:absolute;left:55px;top:340px;width:106px;height:25px;z-index:12;">
</form>
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:107px;top:0px;width:710px;height:74px;z-index:19;">
<div id="wb_Text2" style="position:absolute;left:285px;top:40px;width:151px;height:19px;z-index:13;text-align:left;">
<span style="color:#F7F7F9;font-family:Exo;font-size:17px;"><strong><a href="../profile_historique/profile_historique.php?id=<?php echo $ligne['id'];?>">Historique</a></strong></span></div>
<div id="wb_Text6" style="position:absolute;left:0px;top:40px;width:151px;height:19px;z-index:14;text-align:left;">
<span style="color:#F7F7F9;font-family:Exo;font-size:17px;"><strong><a href="../profile/index.php?id=<?php echo $ligne['id'];?>">Profile</a></strong></span></div>
<div id="wb_Image3" style="position:absolute;left:576px;top:20px;width:134px;height:74px;z-index:15;">
<img src="../images/paramaitre.png" id="Image3" alt=""></div>
</div>
</div>
<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:0px;width:100%;height:80px;z-index:1;">
</div>
</body>
 <?php }?>
</html>