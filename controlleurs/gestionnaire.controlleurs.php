<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='ajoute.logement') {
		  show_ajout_logement();
		}

}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	
	if ($_POST['action']=='ajoute.logement'){

	}
}
function inserer_logement(array $data) {
extract($data);
	$logement=[
rand(),
$adresse,
$surface,
$logement,
$type_logement,
$zone,
$utilisateur

	];	

 $in_logement=insert_logement($logement);
	
}

function show_ajout_logement(){
	$logements=select_type_logement();
	$zones=select_zone();
      $proprietaires=select_utilisateur();
     require(ROUTE_DIR.'views/gestionnaire/ajoute.logement.html.php');
}

?>