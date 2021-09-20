<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	   if ($_GET['views']=='connexion') {
	
	    require(ROUTE_DIR.'views/security/connexion.html.php');
	   
	}elseif ($_GET['views']=='inscription') {
		require(ROUTE_DIR.'views/security/inscription.html.php');
	
	}else {
	    
		require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
	    }
	
}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset($_POST['action'])) {
		if ($_POST['action']=='connexion') {
			$_SESSION['login']=$_POST['login'];
			$_SESSION['password']=$_POST['password'];
			connexion_utilisateur($_POST['login'], $_POST['password']);
		}
	} else {
		require(ROUTE_DIR.'views/security/connexion.html.php');
	    }
}


function connexion_utilisateur(string $login, string $password):void{
	
	$arrayError=array();
	
	validation_login($login,'login',$arrayError);
	validation_password($password,'password',$arrayError);
	
	if (form_valid($arrayError)) {
		$utilisateur=find_utilisateur_by_login_password($login, $password);
		if (count($utilisateur)==0){
			$arrayError['erreur']='login ou password incorrect';
		}else {
			$_SESSION['userConnect']=$utilisateur;
			header("location:".WEB_ROUTE);
		}
	}else {
		$_SESSION['arrayError']=$arrayError;
		
 	header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');	}
		exit();

}


	


?>