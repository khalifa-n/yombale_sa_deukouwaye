<?php

function find_logement_disponible(string $etat_logement="disponible"):array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from logement l where l.etat_logement=?";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array('disponible'));
	$logements = $sth->fetchAll();
	fermer_connection_bd($pdo);	
	return $logements ;
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

    ?>