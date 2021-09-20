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
  
    ?>