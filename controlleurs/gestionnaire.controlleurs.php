<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='ajoute.logement') {
		show_ajout_logement(); 
		}

}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset ($_POST['action'])){
	if ($_POST['action']=='ajoute.logement') {
		show_ajout_logement($_POST);
		}	
		
	}
}
function inserer_logement(array $logement):void {
	$arrayError=array();
extract($logement);
	validation($adresse,'adresse',$arrayError);
	validation($surface,'surface',$arrayError);
	validation_password($zone,'zone',$arrayError); 
	
 if (form_valid($arrayError)) {
	
		
	insert_logement($logement);
	
	    if(count($arrayError) == 0) {
		$arrayError['erreur']='login ou password incorrect';
	
}
require(ROUTE_DIR.'views/visiteur/visiteur.html.php');	   exit;
}else {
	$_SESSION['arrayError']=$arrayError;
	require(ROUTE_DIR.'views/gestionnaire/ajoute.logement.html.php');	   exit;
	exit;
    }
}

function show_ajout_logement(){
	$zones=select_zone();
      $proprietaires=select_utilisateur();
      $logements= find_logement_disponible();

     require(ROUTE_DIR.'views/gestionnaire/ajoute.logement.html.php');
}

?>