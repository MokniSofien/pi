<?php
 $host="localhost";
$user="root";
$password="";
 $dbname='com';		
$cxn=mysqli_connect($host,$user,$password,$dbname);
$email=$_GET['email'];
 
 $requete="select * from client where email='".$email."'";
$result=mysqli_query($cxn,$requete);
 while ($ligne=mysqli_fetch_array($result)){
$email=$ligne['email'];
$password=$ligne['password'];
$id=$ligne['id'];
			

session_start ();	
$_SESSION['id']=$id;
 header ('location:../panier/panier.php?id="'.$_SESSION['id'].'"');	
 }
 

 
 
 ?>