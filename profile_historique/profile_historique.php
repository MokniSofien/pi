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
<img src="../images/064ck9t1ep_01.jpg" id="Image4" alt=""></div>
</div>



<div id="Layer2" style="position:absolute;text-align:left;left:23%;top:310px;width:518px;height:390px;z-index:12;">
<?php 

require('../connexion/session_verif.php');
 $host="localhost";
$user="root";
$password="";
 $dbname='com';
$id=$_GET['id'];
$cn=mysqli_connect($host,$user,$password,$dbname);
 $req="select * from achat where id_client=".$id;
$res=mysqli_query($cn,$req);
 while ($data=mysqli_fetch_array($res)){


 

?>
<table style="position:absolute;left:29px;top:22px;width:450px;height:348px;z-index:6;" id="Table1">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Article</span></td>
<td class="cell1"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Prix</span></td>
<td class="cell2"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Quantité</span></td>
</tr>
<tr>
<td class="cell0"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Version Basic</span></td>
<td class="cell1"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> <?php echo $data['basictotale'];?> $</span></td>
<td class="cell2"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><?php echo $data['basicqt'];?></span></td>
</tr>
<tr>
<td class="cell3"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Version Business </span></td>
<td class="cell4"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> <?php echo $data['businesstotale'];?>$</span></td>
<td class="cell5"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> <?php echo $data['businessqt'];?></span></td>
</tr>
<tr>
<td class="cell6"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> Version Entreprise </span></td>
<td class="cell7"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><?php echo $data['entreprisetotale'];?>$</span></td>
<td class="cell8"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> <?php echo $data['entrepriseqt'];?></span></td>
</tr>
</table>
 <?php }?>

</div>
<div id="Layer3" style="position:absolute;text-align:left;left:107px;top:0px;width:710px;height:74px;z-index:13;">
<div id="wb_Text6" style="position:absolute;left:0px;top:40px;width:151px;height:19px;z-index:7;text-align:left;">
<span style="color:#F7F7F9;font-family:Exo;font-size:17px;"><strong><a href="../profile/index.php?id=<?php echo $ligne['id'];?>">Profil</a></strong></span></div>
<div id="wb_Text2" style="position:absolute;left:559px;top:40px;width:151px;height:19px;z-index:8;text-align:left;">
<span style="color:#F7F7F9;font-family:Exo;font-size:17px;"><strong><a href="../profile_parametre/profile_param.php?id=<?php echo $ligne['id'];?>">Parameitre</a></strong></span></div>
<div id="wb_Image2" style="position:absolute;left:273px;top:20px;width:127px;height:74px;74px;z-index:9;">
<img src="../images/compte-client-(profile-).png" id="Image2" alt=""></div>
</div>
<div id="wb_Text7" style="position:absolute;left:350px;top:298px;width:293px;height:22px;z-index:14;text-align:left;">
<span style="color:#4eb1cb;font-family:Exo;font-size:19px;">consulter votre historique d’achat&nbsp; </span></div>
</div>
<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:0px;width:100%;height:80px;z-index:1;">
</div>
</body>
 <?php }?>

</html>