<?php 
if(isset($_POST['Valider']))
{
	if(isset($_POST['radio1']))
	{
		header('location:../paiement_identification/visa_card.html');
		
		
	}
	
		if(isset($_POST['radio2']))
	{
		header('location:../paiement_identification/paypal_card.html');
		
		
	}	if(isset($_POST['radio3']))
	{
		header('location:../paiement_identification/master_card.html');
		
		
	}	if(isset($_POST['radio4']))
	{
		header('location:../paiement_identification/discover_card.html');
		
		
	}
	
}

?>