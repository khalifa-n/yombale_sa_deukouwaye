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
		function find_montant_contrat(int $id_utilisateur):array{
			$pdo=ouvrir_connection_bd();
			$sql="select sum(montant_contrat) from contrat_proprietaire cp,utilisateur u 
			where cp.id_utilisateur = u.id_utilisateur 
			and u.id_utilisateur =?
			";
				 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
				 $sth->execute(array($id_utilisateur));
				 $montants = $sth->fetchAll();
				 fermer_connection_bd($pdo);	
				 return  $montants;	
				}
	function update_contrat_proprietaire(int $id_contrat):int{
			$pdo=ouvrir_connection_bd();
			$sql="UPDATE `contrat_proprietaire` SET `etat_contrat` = 'annule'
			 WHERE `contrat_proprietaire`.`id_contrat` = ?

			";
				 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
				 $sth->execute(array($id_contrat));
				 $annuler = $sth->fetchAll();
				 fermer_connection_bd($pdo);	
				 return  $annuler;	
				}						     	
?>