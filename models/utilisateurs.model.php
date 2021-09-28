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
	$sql="    INSERT INTO `utilisateur` ( `nom`, `prenom`, `login`, `password`,
	 `confirme_password`, `adresse`, `id_role`, `telephone`, `date_naissance`, `image`)
	  VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
	
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$date_naisse = date('Y-m-d h:i:s', $date_naisse);

	$date_naisse=date_format(date_create($date_naisse),'Y-m-d');
	/* var_dump($sth->execute(array(
		$nom,
		$prenom,
		'ghhifff@gmail.com',
		$password,
		$confirme_password,
		'dakar',
		19,
		778098677,
		$date_naisse

	)));
	die;*/
	$telephone = (int) $telephone;
	//var_dump($user);
	//$sth->execute(array ($nom,$prenom,$login,$password,$confirme_password,$adresse,19,(int)$telephone,$date_naissance));
	//var_dump($sth->execute(array ($nom,$prenom,$login,$password,$confirme_password,$adresse,19,$telephone,$date_naisse)));
	 //die;
	 $sth->execute(array ($nom,$prenom,$login,$password,$confirme_password,$adresse,19,$telephone,$date_naisse,$avatar));
	
	$inscrire = $sth->fetchAll();
	fermer_connection_bd($pdo);
	return $inscrire;
	
} 
?>