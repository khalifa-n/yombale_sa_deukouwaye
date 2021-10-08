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
              <input type="hidden" name="controlleurs" value="gestionnaire">  
		         <input type="hidden" name="action" value="filtre_contrat">  
	
      <div class="form-group mr-auto ml-auto col-md-3">
      <label for="inputEmail4">etat</label>
      <select class="form-select  border-light rounded  col-md-12 h-75" style="background-color:blue " name='etat' placeholder=""
      id="floatingSelectGrid"  aria-label="Floating label select example" >
      <option  selected>choisir l'etat</option>
        <option  value="en cours">en cours</option>
	<option  value="termine">disponible</option> 
      </select> 
	 </small>
    </div>
    <div class="form-group mr-auto ml-auto col-md-3">
      <label for="inputEmail4">nom</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:white " name='nom' placeholder=""
      id="floatingSelectGrid"  aria-label="Floating label select example" >
      <option  selected>choisir le proprietaire</option>
        <?php foreach($proprios  as $proprio ):?>
        <option value="<?= $proprio['nom']?>"><?= $proprio['nom']?> </option>
        <?php endforeach ?>
      </select> 
	 </small>
    </div>
    
    <div class="form-group mr-auto ml-auto col-md-3">
      <label for="inputEmail4">proprietaire</label>
      <select class="form-select border-light rounded  col-md-12 h-75" style="background-color:#D3D0C9 " name='prenom' placeholder=""
      id="floatingSelectGrid"  aria-label="Floating label select example" >
      <option  selected>choisir le proprietaire</option>
        <?php foreach($proprios as $proprio ):?>
        <option value="<?= $proprio['prenom']?>"> <?= $proprio['prenom']?></option>
        <?php endforeach ?>
      </select> 
	 </small>
    </div>
    <button type="submit"> ok</button>
    </form>
 
        <table class="table">
  <thead>
    <tr>
     
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">DATE DEBUT</th>
      <th scope="col">DUREE</th>
      <th scope="col">ETAT DU CONTRAT</th>
    </tr>
  </thead>
  <tbody>
    

    <?php
     foreach ($proprios as $un_proprio) :?> 
          <tr>
	  <td><?php echo $un_proprio['prenom']?></td>
	  <td><?php echo $un_proprio['nom']?></td>
              <td><?php echo $un_proprio['date_debut']?></td>
              <td><?php echo $un_proprio['dure']?></td>
              <td><?php echo $un_proprio['etat_contrat']?></td>
          </tr>
      <?php endforeach ?>

  </tbody>
</table>
</form>  	
      </div>
    </div>
  </div>
 
</div>	
</div>
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>