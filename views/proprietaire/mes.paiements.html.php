<?php 
require(ROUTE_DIR.'views/inc/header.html.php');
require(ROUTE_DIR.'views/inc/menu.html.php');
?>
<div class="container-fluid">
<div class="row">

  <div class="col-sm-10 ml-auto mr-auto mt-5">
    <div class="card">
      <div class="card-body">
      
     
        <table class="table">
  <thead>
  <?php
  $id_utilisateur=$_SESSION['userConnect']['id_utilisateur'];
  $montants=find_montant_contrat($id_utilisateur);
  foreach ($montants as $montant) :?> 
    <tr>
      <th scope="col">MES CUMULS DE MONTANTS : <?php echo  $montant['sum(montant_contrat)']?>  fcfa</th>
    </tr>
  </thead>
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
