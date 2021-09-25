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
function inserer_logement(array $data,array $files) {
extract($data);

 if (form_valid($arrayError)) {
	$target_dir="upload/";
	$target_file=$target_dir . basename($_FILES["image"]["name"]);
	$data['image']=$target_file;
	$logement=[
		rand(),
		$adresse,
		$surface,
		"disponible",
		$type_logement,
		
		$_POST['utilisateur']
	
			];	
	$id_logement=insert_logement($logement);

	
	upload_images($_FILES, $arrayError, 'image', $target_file);
	  //upload_image($_FILES, $target_file);
	 
	    if(count($arrayError) == 0) {
	      if(!upload_images($_FILES, $target_file)) {
		  $arrayError['image'] = "Erreur lors de l'upload de l'image";
		  $_SESSION['arrayError']=$arrayError;
		  header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&view=ajoute.logement');
		  exit();
	    }
	
}
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