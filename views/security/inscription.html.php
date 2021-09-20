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
                
             
              <form  method="post" action="<?= WEB_ROUTE ?>" class="m-auto">
              <input type="hidden" name="controlleurs" value="security">  
		          <input type="hidden" name="action" value="inscription">  
                <p class=" connexion"> </p>
                  
                 
		
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">Email</label>
      <input type="email"style="background-color:#D3D0C9" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group  mr-auto ml-auto  col-md-5">
      <label for="inputPassword4">Password</label>
      <input type="password"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputEmail4">Email</label>
      <input type="email" style="background-color:#D3D0C9"class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group mr-auto ml-auto col-md-5">
      <label for="inputPassword4">Password</label>
      <input type="password"style="background-color:#D3D0C9" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group mr-5 ml-5">
    <label for="inputAddress">Address</label>
    <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group mr-5 ml-5">
    <label for="inputAddress2">Address 2</label>
    <input type="text"style="background-color:#D3D0C9" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
 
  <button type="submit" style="background-color:#7D5939" class="btn mr-5 mt-3 mb-5 ml-5 ">connexion</button>


              </form>  
              </div>              
            </div>
      
  </div> 
  </div> 
  </div> 
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>