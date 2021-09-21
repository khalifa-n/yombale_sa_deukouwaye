<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {	
	   if ($_GET['views']=='acceuil') {
		require(ROUTE_DIR.'views/acceuil/acceuil.html.php');	
		
	}
}elseif ($_SERVER['REQUEST_METHOD']=='GET') {
	if (isset($_GET['views'])) {	
		if ($_GET['views']=='catalogue') {
		     require(ROUTE_DIR.'views/catalogue/catalogue.html.php');     
	     }
}
}
else {
	require(ROUTE_DIR.'views/acceuil/acceuil.html.php')	;
}
}
?>