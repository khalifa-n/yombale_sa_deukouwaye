<?php
//error_reporting(-1);
require(dirname(__DIR__).'/config/constante.php');
require(dirname(__DIR__) . '/config/require.php');
open_session();
/* $data=find_bien_by_id(1);
echo("<pre>");
var_dump($data);
echo("<pre>"); */
require_once(ROUTE_DIR .'lib/router.php');
?>