<?php
if (isset($_REQUEST['controlleurs'])) {
    if ($_REQUEST['controlleurs'] =='gestionnaire') {
        require_once(ROUTE_DIR .'controlleurs/gestionnaire.controlleurs.php');
    
} elseif ($_REQUEST['controlleurs'] =='security') {
    require_once(ROUTE_DIR .'controlleurs/security.controlleurs.php');
}else {
    require_once(ROUTE_DIR .'controlleurs/gestionnaire.controlleurs.php');
}
}


?>