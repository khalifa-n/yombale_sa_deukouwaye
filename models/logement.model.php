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
    ?>