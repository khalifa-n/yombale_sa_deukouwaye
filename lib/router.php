<?php
if (isset($_REQUEST['controlleurs'])) {
    if ($_REQUEST['controlleurs'] =='gestionnaire') {
        require_once(ROUTE_DIR .'controlleurs/gestionnaire.controlleurs.php');
    
} else {
    require_once(ROUTE_DIR .'controlleurs/gestionnaire.controlleurs.php');
}
}
?>