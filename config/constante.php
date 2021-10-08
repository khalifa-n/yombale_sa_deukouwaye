<?php 
 //define("WEB_ROUTE" , "http://khalifandiaye.alwaysdata.net");
   define('WEB_ROUTE' , "http://localhost:8000/");
   define('HOST_BD' , 'localhost:8889');

define('ROUTE_DIR', str_replace('public','' , $_SERVER['DOCUMENT_ROOT']) );
define('USER_BD' , 'root');
define('PASSWORD_BD' ,'root');
define('CHAINE_DE_CONNEXION' , 'mysql:dbname=yombale_sa_deukouwaye;host='.HOST_BD);
define('NOMBRE_PAR_PAGE',2);
?>