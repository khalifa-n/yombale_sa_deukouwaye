<?php
function ouvrir_connection_bd():PDO{
	try{   
		$option=[
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		];	
 $pdo = new PDO(CHAINE_DE_CONNEXION, USER_BD, PASSWORD_BD,$option);
 return $pdo; 
}catch (PDOException $e){
	die ($e ->getMessage());
   }
}

function fermer_connection_bd(PDO $pdo){
	$pdo=null;
	}
?>