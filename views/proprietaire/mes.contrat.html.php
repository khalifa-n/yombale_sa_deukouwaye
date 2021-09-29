<?php 
require(ROUTE_DIR.'views/inc/header.html.php');
require(ROUTE_DIR.'views/inc/menu.html.php');
?>
<div class="container-fluid">
<div class="row">

  <div class="col-sm-10 ml-auto mr-auto mt-5">
    <div class="card">
      <div class="card-body">
      
     
        <p class="card-text  ">Text</p>
        <table class="table">
  <thead>
    <tr>
     
      <th scope="col">DATE DEBUT</th>
      <th scope="col">DUREE</th>
      <th scope="col">MONTANT</th>
    </tr>
  </thead>
  <tbody>
    

    <?php

	$id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
	$contrats=find_contrat_proprietaire($id_utilisateur);

     foreach ($contrats as $contrat) :?> 
          <tr>
              <td><?php echo $contrat['date_debut']?></td>
              <td><?php echo $contrat['dure']?></td>
              <td><?php echo $contrat['montant_contrat']?></td>
          </tr>
      <?php endforeach ?>

  </tbody>
</table>	
      </div>
    </div>
  </div>
 
</div>	
</div>
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>
