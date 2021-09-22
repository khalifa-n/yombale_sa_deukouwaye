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
              <input type="hidden" name="controlleurs" value="security">  
		 <input type="hidden" name="action" value="inscription">  
                <p class=" inscription"> </p>
                  
                 
		
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">Nom</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputEmail4" placeholder="nom"
      name='nom'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['nom']) ? $arrayError['nom'] : " "  ?>
      </small>
    </div>
    <div class="form-group  mr-auto ml-auto  col-md-5">
      <label for="inputPassword4">Prenom</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="Prenom"
      name='prenom'>
      <small  class="form-text text-danger">
          <?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : " "  ?>
      </small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">login</label>
      <input type="text" style="background-color:#D3D0C9"class="form-control" id="inputEmail4" placeholder="login"
      name="login">
      <small  class="form-text text-danger">
                <?php echo isset($arrayError['login']) ? $arrayError['login'] : " "  ?>
	 </small>
    </div>
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputPassword4">Password</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="Password"
      name='password'>
      <small  class="form-text text-danger">
           <?php echo isset($arrayError['password']) ? $arrayError['password'] : " "  ?>
         </small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">confirme password</label>
      <input type="text" style="background-color:#D3D0C9"class="form-control" id="inputEmail4" placeholder="confirme password"
      name='confirme_password'>
      <small  class="form-text text-danger">
           <?php echo isset($arrayError['confirme_password']) ? $arrayError['confirme_password'] : " "  ?>
         </small> 
    </div>
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputPassword4">adresse</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="adresse"
      name='adresse'>
      <small  class="form-text text-danger">
           <?php echo isset($arrayError['adresse']) ? $arrayError['adresse'] : " "  ?>
         </small>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputPassword4">telephone</label>
      <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="telephone"
      name='telephone'>
      <small  class="form-text text-danger">
           <?php echo isset($arrayError['telephone']) ? $arrayError['telephone'] : " "  ?>
         </small>
    </div>
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputPassword4">date naissance</label>
      <input type="date"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="date naissance"
      name='date_naisse'>
      <small  class="form-text text-danger">
           <?php echo isset($arrayError['date_naisse']) ? $arrayError['date_naisse'] : " "  ?>
         </small>
    </div>
  </div>  
   <div class="form-group mr-auto ml-auto col-md-10 ">
                     <label for="avatar">avatar</label>
                     <input type="file" style="background-color:#D3D0C9" class="form-control-file" id="fichier"
                     name="avatar" >
                     <small id="imagelHelp"  class="form-text text-danger">
                     <?php echo  $arrayError['avatar']?>

                 </div> 
  
  <button type="submit" style="background-color:#7D5939;color:#FFF" class="btn mr-5 ml-auto mt-3 mb-5  ">inscription</button>


              </form>  
              </div>              
            </div>
      
  </div> 
  </div> 
  </div> 
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>