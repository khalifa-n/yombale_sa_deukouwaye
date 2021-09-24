<?php
  ob_start();
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
			//unset($_POST['confirme_password']);
			inscription($_POST, $_FILES);
			
		}
	} else {
		require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
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
			// var_dump($_SESSION);
			$_SESSION['userConnect']=$utilisateur;
			if (est_gestionnaire()) {
				require(ROUTE_DIR.'views/gestionnaire/ajoute.logement.html.php');
			}elseif (est_proprietaire()) {
				require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
	
			}elseif (est_client()) {
				require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
	
			}elseif (est_responsable_location()) {
				require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
			}elseif (est_responsable_financier()) {
				require(ROUTE_DIR.'views/catalogue/catalogue.html.php');
	
			}
		}
	}else {
		$_SESSION['arrayError']=$arrayError;
		
 	header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');	
		exit();
	}
}
function inscription(array $data, array $files):void{
	$arrayError=array();
	extract($data);
	validation_nom($nom,'nom',$arrayError);
	validation_nom($prenom,'prenom',$arrayError);
	validation_login($login,'login',$arrayError);
	validation_password($password,'password',$arrayError); 
	
	validation_nom($adresse,'adresse',$arrayError);
	validation_password($telephone,'telephone',$arrayError); 
	
	 
    if (form_valid($arrayError)) {
	    $target_dir="upload/";
	    $target_file=$target_dir . basename($_FILES["avatar"]["name"]);
	    $data['avatar']=$target_file;
	add_user($data);
	valide_image($_FILES, $arrayError, 'avatar', $target_file);
              //upload_image($_FILES, $target_file);
             
                if(count($arrayError) == 0) {
                  if(!upload_image($_FILES, $target_file)) {
                      $arrayError['avatar'] = "Erreur lors de l'upload de l'image";
                      $_SESSION['arrayError']=$arrayError;
                      header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
                      exit();
                }
              }
	require(ROUTE_DIR.'views/acceuil/acceuil.html.php');	   exit;
	}else {
		$_SESSION['arrayError']=$arrayError;
		require(ROUTE_DIR.'views/security/inscription.html.php');	   exit;
		exit;
	    }
	}
	
	
	function deconexion ():void{
	unset($_SESSION['userConnect']);
	liste_logement_disponible();	
	exit;
	}


	ob_end_flush();
	
?>