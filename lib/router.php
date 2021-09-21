<?php
if (isset($_REQUEST['controlleurs'])) {
        if ($_REQUEST['controlleurs'] =='utilisateur') {
            require_once(ROUTE_DIR .'controlleurs/utilisateur.controlleurs.php');
    } elseif ($_REQUEST['controlleurs'] =='security') {
    
        require_once(ROUTE_DIR .'controlleurs/security.controlleurs.php');
        
    }

}else {
    require(ROUTE_DIR.'views/acceuil/acceuil.html.php');
}

?>