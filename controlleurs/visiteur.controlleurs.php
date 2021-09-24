<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='visiteur') {
		liste_logement_disponible();		

		}
	}else {
		liste_logement_disponible();
	}
}

function liste_logement_disponible(){
	 $nom_logements=select_type_logement();
	$nom_zone=select_zone();
	$logements= find_logement_disponible();
       require(ROUTE_DIR.'views/visiteur/visiteur.html.php');
       
}


?>		