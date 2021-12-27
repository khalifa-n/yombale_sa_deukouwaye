<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	        if ($_GET['views']=='mes.demandes') {
		require(ROUTE_DIR.'views/client/mes.demandes.html.php');
			
		}elseif ($_GET['views']=='mes.contrats'){
			require(ROUTE_DIR.'views/client/mes.contrats.html.php');
	
	}elseif ($_GET['views']=='par.proprietaire'){
		contrat_par_proprietaire();
}
    }
  	 }
	   function faire_une_demande(array $donnee_demande ){
		 extract($donnee_demande) ;
		 $demandes=[
			date('d-m-y h:i:s'),
			'en cours',
		 ];
	   }
