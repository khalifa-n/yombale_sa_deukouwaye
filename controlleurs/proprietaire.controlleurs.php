<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	       if ($_GET['views']=='mes.contrat') {
		contrat_par_proprietaire();
	}

}
}
function contrat_par_proprietaire(){
	$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
	$contrats=find_contrat_proprietaire((int)$id_utilisateur);
	require(ROUTE_DIR.'views/proprietaire/mes.contrat.html.php');
}
?>