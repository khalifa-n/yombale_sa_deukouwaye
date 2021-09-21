<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {
	   if ($_GET['views']=='connexion') {
	
	    require(ROUTE_DIR.'views/security/connexion.html.php');
	   
	}elseif ($_GET['views']=='inscription') {
		require(ROUTE_DIR.'views/security/inscription.html.php');
	}elseif ($_GET['views']=='deconexion') {
		deconexion();
	} 
	
}
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	
	if (isset($_POST['action'])) {
		if ($_POST['action']=='connexion') {
			$_SESSION['login']=$_POST['login'];
			$_SESSION['password']=$_POST['password'];
			connexion_utilisateur($_POST['login'], $_POST['password']);
		}elseif ($_POST['action']=='inscription') {
			unset($_POST['confirme_password']);
			inscription($_POST);
			
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
		if (gettype($utilisateur)==[]){
			$arrayError['erreur']='login ou password incorrect';
		}else {
			$_SESSION['userConnect']=$utilisateur;
			require(ROUTE_DIR.'views/catalogue/catalogue.html.php')	;
		}
	}else {
		$_SESSION['arrayError']=$arrayError;
		
 	header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');	}
		exit();

}
function inscription(array $data):void{
	$arrayError=array();
	extract($data);
	validation_nom($nom,'nom',$arrayError);
	validation_nom($prenom,'prenom',$arrayError);
	validation_login($login,'login',$arrayError);
	validation_password($password,'password',$arrayError); 
	
	validation_nom($adresse,'adresse',$arrayError);
	validation_password($telephone,'telephone',$arrayError); 
	
	   
    if (form_valid($arrayError)) {
	$user=add_user($data);
	   header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
	   exit;
	}else {
		$_SESSION['arrayError']=$arrayError;
		header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
		exit;
	    }
	}


function deconexion ():void{
	unset($_SESSION['userConnect']);
	header('location:'.WEB_ROUTE.'?controlleurs=security&views=acceuil');

	exit;
	}



?>