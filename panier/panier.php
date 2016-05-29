<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="fronte.css" rel="stylesheet">
<link href="page7.css" rel="stylesheet">
<script language="javascript">
var valeur=0;
var totale=50;
var valeurbi=0;
var totalebi=70;
var valeurentreprise=0;
var totalentreprise=100;
function modifierentreprise(increment) {

valeurentreprise+=increment;


document.getElementById('textentreprise').value=valeurentreprise;
document.getElementById('totalentreprise').value=totalentreprise*valeurentreprise;
}
function modifierbusiness(increment) {

valeurbi+=increment;


document.getElementById('textbi').value=valeurbi;
document.getElementById('totalebi').value=totalebi*valeurbi;
}
function modifier(increment) {
valeur+=increment;
valeurbi+=increment;


document.getElementById('text').value=valeur;
document.getElementById('totale').value=totale*valeur;

}
function envoyer()
{var prix=document.forms.formulaire.value.prix;
var totale=document.forms.formulaire.value.totale;
var prixbi=document.forms.formulaire.value.prixbi;
var totalebi=document.forms.formulaire.value.totalebi;
var prixentreprise=document.forms.formulaire.value.prixentreprise;
var totalentreprise=document.forms.formulaire.value.prixentreprise;
var id=document.forms.formulaire.value.id;


	window.location="affiche.php?prix="+prix+"totale="+totale+"prixbi="+prixbi+"totalebi="+totalebi+"totalentreprise="+totalentreprise+"id="+id;
}
</script>
</head>
<?php 
require('../panier_connexion/connexion.php');

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

</div>
<div id="Layer1">
<div id="Layer1_Container">
<div id="Layer2">
<div id="wb_Image2">
<img src="../images/pan.png" id="Image2" alt=""></div>
<div id="wb_Text1">
<span style="color:#000000;font-family:Exo;font-size:13px;"><strong>Panier</strong></span></div>
</div>
<div id="Layer5">
<div id="Layer5_Container">
<div id="wb_Image5">
<img src="../images/comfirm.png" id="Image5" alt=""></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Exo;font-size:13px;"><strong>Confirmation</strong></span></div>
</div>
</div>
<div id="Layer4">
<div id="wb_Image4">
<img src="../images/card.png" id="Image4" alt=""></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Exo;font-size:13px;"><strong>Paiement </strong></span></div>
</div>
<div id="Layer3">
<div id="wb_Image3">
<img src="../images/admin.png" id="Image3" alt=""></div>
<div id="wb_Text2">
<span style="color:#000000;font-family:Exo;font-size:13px;"><strong>Identification</strong></span></div>
</div>
<table id="Table1">
<form name="formulaire" action="affiche.php" method="javascript:envoyer()">

<tr>
<td class="cell0"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> </span><span style="color:#00BFFF;font-family:Exo;font-size:13px;line-height:16px;"><strong>Produit</strong></span></td>
<td class="cell1"><span style="color:#00BFFF;font-family:Exo;font-size:13px;line-height:16px;"><strong>Description </strong></span></td>
<td class="cell2"><span style="color:#00BFFF;font-family:Exo;font-size:13px;line-height:16px;"><strong>Prix unitaire</strong></span></td>
<td class="cell3"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> </span><span style="color:#00BFFF;font-family:Exo;font-size:13px;line-height:16px;"><strong>Quantité </strong></span></td>
<td class="cell4"><span style="color:#00BFFF;font-family:Exo;font-size:13px;line-height:16px;"><strong>Prix totale</strong></span></td>
</tr>
<tr>
<td class="cell5"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><strong> Version Basic</strong></span></td>
<td class="cell6"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> une application mobile pour gestion de&nbsp; caffée pour 5 gérants</span></td>
<td class="cell7"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> 50 $</span></td>
<td class="cell8"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;">


<div id="Layer7">
<input type="button" id="Button" value="-1" onClick="modifier(-1)"style=""> 
<input name="prix" type="text" id="text"  value="0" size="3" >

<input type="button" id="Button" value="+1" onClick="modifier(1)" >

 </div>




</div>


</span></td>
<td class="cell9"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> <input name="totale" type="text" id="totale" value="0" size="3" style="width:50%;" ></span></td>
</tr>
<tr>
<td class="cell5"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><strong> Version Business</strong></span></td>
<td class="cell6"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> une application mobile pour gestion de&nbsp; caffée pour 10 gérants</span></td>
<td class="cell7"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> 70 $</span></td>
<td class="cell8"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;">

<div id="Layer7">

<input name="id" type="hidden" id="id" value="<?php echo $ligne['id'];?>">
<input type="button" id="But" value="-1" onClick="modifierbusiness(-1)"> 
<input name="prixbi" type="text" id="textbi"  value="0" size="3"  >

<input type="button" id="But1" value="+1" onClick="modifierbusiness(1)" >

</div>


 </span></td>
<td class="cell9"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> </span><input name="totalebi" type="text" id="totalebi" value="0" size="3" ></td>
</tr>
<tr>
<td class="cell0"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><strong> Version Entreprise</strong></span></td>
<td class="cell1"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> une application mobile pour gestion de&nbsp; caffée pour 20 gérants</span></td>
<td class="cell2"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> 100 $</span></td>
<td class="cell3"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"> 

<div id="Layer8">


<input type="button" id="Butt" value="-1" onClick="modifierentreprise(-1)"style=""> 
<input name="prixentreprise" type="text" id="textentreprise"  value="0" size="3" style="" >

<input type="button" id="Butt1" value="+1" onClick="modifierentreprise(1)">

</div>


</span></td>
<td class="cell4"><span style="color:#000000;font-family:Exo;font-size:13px;line-height:16px;"><input name="totalentreprise" type="text" id="totalentreprise" value="0" size="3" > </span></td>
</tr>
<div aling="centre" style="    top: 300px;position: absolute;margin-left: 50%;">
 <input  id="Button1" name="submit" type="submit" value="valider" >
</div>
</form>
</table>

</div>
</div>
</body>
 <?php } ?>
</html>