<?php
function find_contrat_proprietaire(int $id_utilisateur):array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from contrat_proprietaire cp,utilisateur u
	where cp.id_utilisateur = u.id_utilisateur
	and u.id_utilisateur =?";
		 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		 $sth->execute(array($id_utilisateur));
		 $contrats = $sth->fetchAll();
		 fermer_connection_bd($pdo);	
		 return  $contrats;	
		}
?>