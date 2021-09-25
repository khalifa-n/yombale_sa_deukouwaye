<?php 
function est_vide(string $valeur): bool {
    return empty($valeur);
}


function is_email($valeur):bool{
    if (filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
        return true;
      }else {
        return false;
      }
} 

function validation_login(string $valeur, string  $key, array &$arrayError){
	if (est_vide($valeur)) {
	    $arrayError[$key] = "le login est obligatoire";
	}elseif (!is_email($valeur)) {
	    $arrayError[$key] = "le login doit être un email (exemple123@gmail.com)";
	}
	    
    }
function validation_password(string $valeur, string $key , array &$arrayError, $min = 6, $max = 10){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le password est obligatoire";
    }elseif ((strlen($valeur) < $min)||(strlen($valeur) > $max)) {
        $arrayError[$key] = "le password doit être compris entre $min et $max";
    }
        
}
function form_valid($arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }
    return false;
}

function validation_nom(string $valeur, string  $key, array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "ce champ est obligatoire";
    }
}
function validation_prenom(string $valeur, string  $key, array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "ce champ est obligatoire";
    }
} 


?>