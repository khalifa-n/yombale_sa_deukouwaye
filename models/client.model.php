<?php
function find_client_by_login_password(string $login, string $password):array{

	$pdo=ouvrir_connection_bd();
	$sql="select * from client 
	where  login=?
	and password=?";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array($login,$password));
	$client = $sth->fetchAll();
	fermer_connection_bd($pdo);
	return $client;   
    } 
    function find_demande_client(int $id_utilisateur,int $id_logement,int $id_type_logement):array{
	 $pdo=ouvrir_connection_bd();
	 $sql="select *from demande d,utilisateur u,logement l,type_logement t 
	 where d.id_utilisateur=u.id_utilisateur 
	 and u.id_utilisateur=l.id_utilisateur 
	 and d.id_utilisateur= ?
	 and d.id_logement=l.id_logement
	 and l.id_logement=?
	 and l.id_type_logement=t.id_type_logement
	 and l.id_type_logement=?";
	 $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	 $sth->execute(array($id_utilisateur,$id_logement,$id_type_logement));
	 $demandes = $sth->fetchAll();
	 fermer_connection_bd($pdo);	
	 return  $demandes;	
}

function insert_reservation(array $data):int{
	$pdo= ouvrir_connection_bd();
	$sql="INSERT INTO `demande`
	 ( `date_demande`, `etat_demande`, `id_logement`, `id_utilisateur`) 
	VALUES ( ?, ?, ?, ?), ;
	";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute($data);
	$nbre_ligne_insert = $sth->rowCount();
	fermer_connection_bd($pdo);//fermeture
	return $nbre_ligne_insert;
}

    ?>