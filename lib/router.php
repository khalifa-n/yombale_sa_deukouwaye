<?php
if (isset($_REQUEST['controlleurs'])) {
        if ($_REQUEST['controlleurs'] =='security') {
            require_once(ROUTE_DIR .'controlleurs/security.controlleurs.php');
    }elseif ($_REQUEST['controlleurs'] =='visiteur') {
        require_once(ROUTE_DIR .'controlleurs/visiteur.controlleurs.php');

           }elseif ($_REQUEST['controlleurs'] =='gestionnaire') {
            require_once(ROUTE_DIR .'controlleurs/gestionnaire.controlleurs.php');
        }elseif ($_REQUEST['controlleurs'] =='proprietaire') {
            require_once(ROUTE_DIR .'controlleurs/proprietaire.controlleurs.php');
 
        }
}else {
    require_once(ROUTE_DIR .'controlleurs/visiteur.controlleurs.php');
}


?>