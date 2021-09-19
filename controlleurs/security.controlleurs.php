<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	   if ($_GET['views']=='connexion') {
	    require(ROUTE_DIR.'views/security/connexion.html.php');
	   }elseif($_GET['views']=='inscription')  {
	    require(ROUTE_DIR.'views/security/inscription.html.php');
	   }
	}else {
	    // require(ROUTE_DIR.'views/bien/catalogue.html.php');
	    //require(ROUTE_DIR.'views/security/connexion.html.php');
	    require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
	}
}


function connexion (string $login ,string $password):void{
	$arrayError=[];
}
validation_login($login, "login" ,$arrayError);
validation_password($password,"password",$arryError);
if (form_valid($arrayError)) {
	# code...
}
?>