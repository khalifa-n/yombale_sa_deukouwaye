<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {	
	   if ($_GET['views']=='acceuil') {
		liste_logement_disponible();	
	}else {
		liste_logement_disponible();	
	}


}
}elseif ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {	
		if ($_GET['views']=='catalogue') {
		     require(ROUTE_DIR.'views/catalogue/catalogue.html.php');     


	     }
}
}


?>