<?php 
require(ROUTE_DIR.'views/inc/header.html.php');
require(ROUTE_DIR.'views/inc/menu.html.php');
?>
<div class="container-fluid">
<div class="row">

  <div class="col-sm-10 ml-auto mr-auto mt-5">
    <div class="card">
      <div class="card-body">
      <form  method="POST" action="<?= WEB_ROUTE ?>" class="m-auto" enctype="multipart/form-data">
              <input type="hidden" name="controlleurs" value="proprietaire">  
		         <input type="hidden" name="action" value="annuler_contrat">  
     
        <p class="card-text  ">MES CONTRATS</p>
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
              <td><?php echo $contrat['dure']?> mois</td>
              <td><?php echo $contrat['montant_contrat']?> fcfa</td>
              <td><input name="annuler" type="submit" id="annuler" value="annuler_contrat" /></td>
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
