<?php
ob_start();
require(ROUTE_DIR.'views/inc/header.html.php');
  require(ROUTE_DIR.'views/inc/menu.html.php');
  
?>

<img src="image/slide.png/" class="img-fluid  mt_" alt="Responsive image"> 
  </div>

<!------ Include the above in your HEAD tag ---------->
    <!-- -----------------------------------------------------------NAV BAR -->
    <div class="btn-group"> 
   <button type="button" style="background-color:#D3D0C9" class="btn btn-default mt-5 mb-5 ml-5 dropdown-toggle"
data-toggle="dropdown">Choisissez <span class="caret"></span></button>
   <ul class="dropdown-menu" role="menu"> 
      <li><a href="#">proprietaire</a></li> 
      <li><a href="#">etat</a></li> 
      
   </ul> 
</div>
 

  
</div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container-fluid">
      <div class="row">
      <?php foreach ($logements as $logement) :?> 
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
	     src="image/maison.jpeg/" class="img-fluid  mt_" alt="Responsive image" /> 
        
            <div class="card-body">
              <p class="text_warning"><?php echo $logement['id_type_logement'] .'' .''.$logement['adresse']?>à keur massar</p>
	      <p class="text_warning">130.000.000 fcafa</p>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span
              >
              <a href="#" class="btn btn-sm btn-outline-warning float-right ml-3">demende le logement<i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-warning float-right"
                >detail</a
              >
	     <td> </td>
            </div>
          </div>
        </div>
       
        
        <?php endforeach ?> 
     </div> 

      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
        </div>
      </div> 
    </div>
  </body>
</html>
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
ob_end_flush();	
?>

