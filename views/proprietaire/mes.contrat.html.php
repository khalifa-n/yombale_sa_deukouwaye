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
     
      <th scope="col">date debut</th>
      <th scope="col">durée</th>
      <th scope="col">montant</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php

	$id_utilisateur=$_SESSION['userConnect'];
	$contrats=find_contrat_proprietaire($id_utilisateur);

     foreach ($contrats as $contrat) :?> 
      <td><?php echo $contrat['date_debut']?></td>
      <td><?php echo $contrat['duree']?></td>
      <td><?php echo $contrat['montant_contrat']?></td>
      <?php endforeach ?>

    </tr>
  </tbody>
</table>	
      </div>
    </div>
  </div>
 
</div>	
</div>
