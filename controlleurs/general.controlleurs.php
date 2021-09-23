<?php 
function liste_logement_disponible(){
	
	$logements= find_logement_disponible();
       require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
       return [] ;
}

?>