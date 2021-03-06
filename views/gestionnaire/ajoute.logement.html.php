<?php
 if (isset($_SESSION['arrayError'])) {
  $arrayError=$_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require(ROUTE_DIR.'views/inc/header.html.php');
require(ROUTE_DIR.'views/inc/menu.html.php');
?>
  <div class="container-fluid" >	
    <div class="row">
            <div class="card-body mt-5 col-md-10 mb-5  ml-auto mr-auto"style="background-color:#7D5939 " >
              <div class="container_form"style="background-color:white">
     <form  method="POST" action="<?= WEB_ROUTE ?>" class="m-auto" enctype="multipart/form-data">
              <input type="hidden" name="controlleurs" value="gestionnaire">  
		         <input type="hidden" name="action" value="ajoute.logement">  
              	
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">adresse</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control h-75" id="inputEmail4" placeholder="adresse"
      name='adresse'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['adresse']) ? $arrayError['adresse'] : " "  ?>
      </small>
    </div>
    
    <div class="form-group  mr-auto ml-auto  col-md-5">
      <label for="inputPassword4">surface</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control h-75" id="inputPassword4" placeholder="surface"
      name='surface'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['surface']) ? $arrayError['surface'] : " "  ?>
      </small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">proprietaire</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='proprietaire' 
      id="floatingSelectGrid"  aria-label="Floating label select example" >
      <option value="0" selected>choisir le proprietaire</option>
        <?php foreach($proprietaires as $proprietaire):  ?>
        <option value="<?= $proprietaire['id_utilisateur']?>"><?= $proprietaire['nom'].' '.$proprietaire['prenom']?></option>
        <?php endforeach ?>
      </select> 
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['proprietaire']) ? $arrayError['proprietaire'] : " "  ?>
      </small> 
    </div>
    
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">zone</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='zone' placeholder="type_logement "
      id="floatingSelectGrid"  aria-label="Floating label select example" >
        <option  value="0"  selected>choisir la zone</option>
        <?php foreach($zones as $zone):  ?>
          <option value="<?= $zone['id_zone']?>"><?= $zone['nom_zone']?></option>
        <?php endforeach   ?>
      </select>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['zone']) ? $arrayError['zone'] : " "  ?>
      </small> 
	 
    </div>
  </div> 
      	
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">DATE_DEBUT</label>
      <input type="date"style="background-color:#D3D0C9" class="form-control h-75" id="inputEmail4" placeholder="date"
      name='date'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['date']) ? $arrayError['date'] : " "  ?>
      </small>
    </div>
    <div class="form-group  mr-auto ml-auto  col-md-5">
      <label for="inputPassword4">DUREE</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control h-75" id="inputPassword4" placeholder="duree"
      name='duree'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['duree']) ? $arrayError['duree'] : " "  ?>
      </small>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group  mr-auto ml-auto  col-md-5">
      <label for="inputPassword4">MONTANT CONTRAT</label>
      <input  type="text"style="background-color:#D3D0C9" class="form-control h-75" id="inputPassword4" placeholder="montant contrat"
      name='montant_contrat'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['montant_contrat']) ? $arrayError['montant_contrat'] : " "  ?>
      </small>
    </div>
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">type de logement</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='type_logement' placeholder="type_logement "
      id="floatingSelectGrid"  aria-label="Floating label select example" >
        <option  value="0"  selected>choisir le type de logement</option>  
        <?php foreach($logements as $logement):  ?> 
          <option value="<?= $logement['id_type_logement']?>"><?= $logement['type_logement']?></option>
          <?php endforeach   ?> 

      </select>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['type_logement']) ? $arrayError['type_logement'] : " "  ?>
      </small> 
	 
   <!-- <div class="col-md-4 ">
                        <button class="btn btn-info mb-3 " type="submit" name="nbre"> OK</button>
                    </div> -->
    </div>
        </div> 
        <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5 ">
                     <label for="image">image</label>
                     <input type="file" style="background-color:#D3D0C9" class="form-control-file h-75" id="fichier"
                     name="image" >
                     <small id="imagelHelp"  class="form-text text-danger">
                      <?php //echo  $arrayError['image']?> 
       </div>  

    </div> 
  <div>
  <button type="submit" style="background-color:#7D5939;color:#FFF" class="btn ajouter mt-3 mb-5  " name="ajouter">ajouter</button>
        </div>
              </form>  
              </div>              
            </div>
      
  </div> 
  </div> 
  </div> 
  
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>