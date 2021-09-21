<?php
function find_utilisateur_by_login_password(string $loguin, string $password):array{

	$pdo=ouvrir_connection_bd();
	$sql="select * from utilisateur u,role 	r
	where u.id_role=r.id_role
	and u.login=?
	and u.password=?";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array($loguin,$password));
	$utilisateur = $sth->fetch();
	fermer_connection_bd($pdo);
	return $utilisateur ;   
    }
    function add_user(array $user):array{
	$pdo= ouvrir_connection_bd();
	extract($user);
	$sql="    INSERT INTO `user` (`nom`, `prenom`, `login`,
	 	`password`,`confirme_password`, `adresse`, `id_role`, `telephone`,`date_naissance`) 
		VALUES ( ?, ?,? , 
		?, ?, ?, ?,?,?)";
		
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array ($nom,$prenom,$login,$password,$confirme_password,$adresse,19,$telephone,$date_naissance));
	$inscrire = $sth->fetchAll();
	fermer_connection_bd($pdo);
	return $inscrire;
	
} 
 ?>

