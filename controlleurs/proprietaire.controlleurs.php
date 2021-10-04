<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='mes.contrat') {
		contrat_par_proprietaire();
	}elseif ($_GET['views']=='mes.paiements') {
		montant_contrat();
	}

}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset ($_POST['action'])){
		if ($_POST['action']=='annuler_contrat') {
			annuler_un_contrat();	
			}
	}
}
function contrat_par_proprietaire(){
	$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
	$contrats=find_contrat_proprietaire((int)$id_utilisateur);
	require(ROUTE_DIR.'views/proprietaire/mes.contrat.html.php');
}
function montant_contrat(){
$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
$montants=find_montant_contrat($id_utilisateur);
require(ROUTE_DIR.'views/proprietaire/mes.paiements.html.php');
}
function annuler_un_contrat(){
update_contrat_proprietaire('$id_contrat');
require(ROUTE_DIR.'views/proprietaire/mes.contrat.html.php');
}
?>