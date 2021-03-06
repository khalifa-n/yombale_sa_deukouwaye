<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (est_gestionnaire()) {
		if (isset($_GET['views'])) {
			if ($_GET['views']=='ajoute.logement') {
				show_ajout_logement();
			}elseif ($_GET['views']=='contrat.gestionnaire'){
				contrat_gestionnaire();			
			}elseif ($_GET['views']=='signer.contrat'){
				require(ROUTE_DIR.'views/gestionnaire/signer.contrat.html.php');
		}elseif ($_GET['views']=='par.proprietaire'){
			contrat_par_proprietaire();
			}
		}
	}else {
		header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
		exit;
	}	
}
elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset ($_POST['action'])){
		if ($_POST['action']=='ajoute.logement') {
			inserer_logement($_POST);
		}elseif ($_POST['action']=='filtre_contrat') {
			contrat_par_proprietaire($_POST);
	
		}		
	}
}
function inserer_logement(array $post):void {
	$arrayError=array();
	extract($post);
	validation($adresse,'adresse',$arrayError);
	validation($duree,'duree',$arrayError);
	validation($surface,'surface',$arrayError);
	validation($montant_contrat,'montant_contrat',$arrayError);
	validation_selected($proprietaire,'proprietaire',$arrayError);
	validation_selected($zone,'zone',$arrayError);
	validation_selected($type_logement,'type_logement',$arrayError);

	if (form_valid($arrayError)) {
        
	$logement=[
	rand(),
	$adresse,
	$surface,
	'disponible',
	(int)$type_logement,
	(int)$zone,
	(int)$proprietaire
	];
	$id_logement=insert_logement($logement);

	$contrat_gestion=[
        $date=date_format(date_create(),'Y-m-d'),
	(int)$duree,
	'en cours',
	$montant_contrat,
	(int)$proprietaire,
	$id_logement,
	];
	insert_contrat_gestion($contrat_gestion);
	//(`date_debut`, `dure`,
	//`etat_contrat`, `montant_contrat`, `id_utilisateur`, `id_logement`
		//require(ROUTE_DIR.'views/visiteur/visiteur.html.php');	   exit;
	}else {
		$_SESSION['arrayError']=$arrayError;
		header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=ajoute.logement');		
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
function contrat_par_proprietaire(array $data=null){
	$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
	if (is_null($data) ) {
	$proprios=find_contrat_gestionnaire_par_proprietaire();
	
	}else {
		extract($data);
		$proprios=filtre_contrat_by_etat_by_prprietaire($etat,$nom,$prenom);
	}
require(ROUTE_DIR.'views/gestionnaire/par.proprietaire.html.php');
}
