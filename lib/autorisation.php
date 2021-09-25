<?php 
 function est_gestionnaire():bool{
 	return est_connect() && $_SESSION['userConnect']['nom_role']=='gestionnaire';
 }
 function est_proprietaire():bool{
 	return est_connect() && $_SESSION['userConnect']['nom_role']=='proprietaire';
 }
 function est_responsable_location():bool{
	return est_connect() && $_SESSION['userConnect']['nom_role']=='responsable_location';
}
function est_responsable_financier():bool{
	return est_connect() && $_SESSION['userConnect']['nom_role']=='responsale_financier';
}
function est_client():bool{
	return est_connect() && $_SESSION['userConnect']['nom_role']=='client';
}

?>
