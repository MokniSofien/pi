<?php 

$choix=$_POST['radio'];

if(isset($_POST['Valider']))
	
{
	if($choix=="visa")
	{
		header('location:../paiement_identification/visa_card.html');
		
		
	}
	
	else if($choix=="paypal")
		
	{
		header('location:../paiement_identification/paypal_card.html');
		
		
	}	
	else if($choix=="master")
	{
		header('location:../paiement_identification/master_card.html');
		
		
	}	
	else if($choix=="discover")
	{
		header('location:../paiement_identification/discover_card.html');
		
		
	}
	
}

?>