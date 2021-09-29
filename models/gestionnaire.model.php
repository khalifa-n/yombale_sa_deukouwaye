<?php
function find_logement_disponible():array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from logement l,type_logement t
		 where l.id_type_logement = t.id_type_logement
	 		 and l.etat_logement=?";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array('disponible'));
	$logements = $sth->fetchAll();
	fermer_connection_bd($pdo);	
	return $logements ;
}

function insert_logement(array $logement):int{
	$pdo= ouvrir_connection_bd();
	$sql="INSERT INTO `logement` (`reference`, `adressse`, `surface`, `etat_logement`, `id_type_logement`, 
	`id_zone`, `id_utilisateur`) VALUES (?, ?, ?, ?,
	?, ?, ?)";
	 
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
   	 $sth->execute($logement);
    
      $ajouter = $pdo->lastInsertId();
      fermer_connection_bd($pdo);//fermeture
      return $ajouter ;
}
function insert_contrat_gestion(array $contrat_gestion):int{
	$pdo= ouvrir_connection_bd();
	$sql="INSERT INTO `contrat_proprietaire` (`date_debut`, `dure`,
	 `etat_contrat`, `montant_contrat`, `id_utilisateur`, `id_logement`) VALUES 
	 (?, ?, ?, ?, ?, ?)";
	 
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    var_dump( $sth->execute($contrat_gestion));
    die();
    
      $ajouter = $pdo->lastInsertId();
      fermer_connection_bd($pdo);//fermeture
      return $ajouter ;
}	

function insert_image(array $image):int{
      $pdo= ouvrir_connection_bd();
      $sql="INSERT INTO `image` (`nom_image`, `id_logement`) VALUES (?,?);";
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute($image);
$dernier_id = $pdo->lastInsertId();
fermer_connection_bd($pdo);
return $dernier_id ;
}
function insert_zone(array $zone):int{
	$pdo= ouvrir_connection_bd();
	$sql="INSERT INTO `zone` (, `nom_zone`, `forfait_zone`) VALUES (?,?);";
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute($zone);
  $dernier_id = $pdo->lastInsertId();
  fermer_connection_bd($pdo);
  return $dernier_id ;

}
function insert_utlisateur(array $utilisateur):int{
	$pdo= ouvrir_connection_bd();
	$sql="INSERT INTO `utilisateur` ( `nom`, `prenom`, `login`, `password`, `confirme_password`,
	 `adresse`, `id_role`, `telephone`, `date_naissance`, `image`) VALUES 
	 (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	 
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute($utilisateur);
  $dernier_id = $pdo->lastInsertId();
  fermer_connection_bd($pdo);
  return $dernier_id ;

}
function select_utilisateur():array{
	$pdo= ouvrir_connection_bd();
	$sql="select * from utilisateur u,role r 
	where u.id_role=r.id_role
	and r.nom_role= ?";
	 
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute(array('proprietaire'));
  $users = $sth->fetchAll();
  fermer_connection_bd($pdo);
  return $users ;

}
function select_zone ():array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from zone";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array('nom_zone'));
	 $zone = $sth->fetchAll();
	fermer_connection_bd($pdo);
	return $zone ;

}
 
function select_type_logement():array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from type_logement";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array('type_logement'));
	$logement = $sth->fetchAll();
	fermer_connection_bd($pdo);
	return $logement;
}
		function find_contrat_gestionnaire():array{
			
			$pdo=ouvrir_connection_bd();
			$sql="select * from contrat_proprietaire cp
			 where cp.etat_contrat= ?";
			 
				 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
				 $sth->execute(array('louer'));
				 $contrat_gestionnaires = $sth->fetchAll();
				 fermer_connection_bd($pdo);	
				 return  $contrat_gestionnaires;	
		}	

function find_contrat_gestionnaire_en_cours():int{
	$pdo=ouvrir_connection_bd();
	$sql="select nom,prenom,date_debut,montant_contrat,dure 
	from contrat_proprietaire cp,utilisateur u 
	where cp.id_utilisateur=u.id_utilisateur 
	group by nom,prenom,date_debut,montant_contrat,dure
	";
	  $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	  $sth->execute(array('louer'));
	  $contrat_gestionnaires = $sth->fetchAll();
	  fermer_connection_bd($pdo);	
	  return  $contrat_gestionnaires;	
}

?>