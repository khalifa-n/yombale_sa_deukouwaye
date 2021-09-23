<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='ajoute.logement') {
		require(ROUTE_DIR.'views/gestionnaire/ajoute.logement.html.php');
		}
}
}
