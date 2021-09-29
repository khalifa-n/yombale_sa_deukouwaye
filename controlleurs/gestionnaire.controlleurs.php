<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='ajoute.logement') {
		inserer_logement($_POST); 
		} if ($_GET['views']=='contrat.gestionnaire'){
			contrat_gestionnaire();			
			}if ($_GET['views']=='signer.contrat'){
			require(ROUTE_DIR.'views/gestionnaire/signer.contrat.html.php');	   exit;
		
				}

		}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset ($_POST['action'])){
	if ($_POST['action']=='ajoute.logement') {
		inserer_logement($post);
		}		
	}
}
function inserer_logement(array $post):void {

        extract($_POST);
	$logement=[
	rand(),
	$adresse,
	$surface,
	$etat_logement,
	$type_logement,
	$zone,
	$proprietaire
	];
	$id_logement=insert_logement($logement);
	
 if (form_valid($arrayError)) {
	
		
	
	
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

function contrat_gestionnaire(){
$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
$contrat_gestionnaires=find_contrat_gestionnaire();
require(ROUTE_DIR.'views/gestionnaire/contrat.gestionnaire.html.php');
}
?>