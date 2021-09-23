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
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='proprietaire' placeholder="type_logement "
      id="floatingSelectGrid"  aria-label="Floating label select example" >
      <option  selected>choisir le proprietaire</option>
        <?php foreach($proprietaires as $proprietaire):  ?>
        <option value="<?= $proprietaire['id_utilisateur']?>"><?= $proprietaire['nom'].' '.$proprietaire['prenom']?></option>
        <?php endforeach ?>
      </select>
      
      
     
	 </small>
    </div>
    
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">zone</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='zone' placeholder="type_logement "
      id="floatingSelectGrid"  aria-label="Floating label select example" >
        <option  selected>choisir la zone</option>
        <?php foreach($zones as $zone):  ?>
          <option value="<?= $zone['id_zone']?>"><?= $zone['nom_zone']?></option>
        <?php endforeach   ?> 
      </select>
      
      
     
	 </small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">proprietaire</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='type_logement' placeholder="type_logement "
      id="floatingSelectGrid"  aria-label="Floating label select example" >
        <option  selected>choisir le type de logement</option>
        <?php foreach($logements as $logement):  ?> 
          <option value="<?= $logement['id_type_logement']?>"><?= $logement['type_logement']?></option>
          <?php endforeach   ?> 

      </select>
      
	 </small>
    </div>
    
    <div class="form-group mr-auto ml-auto col-md-5 ">
                     <label for="avatar">avatar</label>
                     <input type="file" style="background-color:#D3D0C9" class="form-control-file h-75" id="fichier"
                     name="avatar" >
                     <small id="imagelHelp"  class="form-text text-danger">
                     <?php echo  $arrayError['avatar']?>

                 </div> 
   

  </div>
 

  
  <div>
    
 

  <button type="submit" style="background-color:#7D5939;color:#FFF" class="btn mr-5 ml-auto mt-3 mb-5  ">ajouter</button>
  <a href="<?= WEB_ROUTE.'?controlleurs=security&views=catalogue'?>"><button style="background-color:#7D5939" class="btn mt-5 ml-5  ">creer un compte</button></a>
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