<?php
function find_user_by_login_password(string $loguin, string $password):array{
	$pdo=ouvrir_connection_bd();
	$sql="select * from user u,role 	r
	where u.id_role=r.id_role
	and u.loguin=?
	and u.password=?";
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array($loguin,$password));
	$user = $sth->fetch(PDO::FETCH_ASSOC);
	fermer_connection_bd($pdo);
	return $user ;   
    }
    ?>