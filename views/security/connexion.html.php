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
            <div class="card-body mt-5 col-md-5 mb-5  ml-auto mr-auto"style="background-color:#7D5939 " >
              <div class="container_form"style="background-color:white">
                
             
              <form  method="post" action="<?= WEB_ROUTE ?>" class="m-auto">
              <input type="hidden" name="controlleurs" value="security">  
		          <input type="hidden" name="action" value="connexion">  
                <p class=" connexion"> connexion</p>
                  <div class="form-group mt-5 mr-5 ml-5"  >
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="text"style="background-color:#D3D0C9" name="login" class="form-control" 
                          id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                             <small  class="form-text text-danger">
                                 <?php echo isset($arrayError['login']) ? $arrayError['login'] : " "  ?>
                             </small>
                  </div>
                  <div class="form-group  mr-5 ml-5">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" style="background-color:#D3D0C9" name="password" class="form-control" 
                        id="exampleInputPassword1" placeholder="Password">
                             <small  class="form-text text-danger">
                                 <?php echo isset($arrayError['password']) ? $arrayError['password'] : " "  ?>
                             </small>
                  </div>
                  <button type="submit" style="background-color:#7D5939" class="btn mr-5 mt-3 mb-5 ml-5 ">connexion</button>
                       <a href="<?= WEB_ROUTE.'?controlleurs=security&views=catalogue'?>"><button style="background-color:#7D5939" class="btn mt-5 ml-5  ">creer un compte</button></a>
                  </div>
                        

              </form>  
              </div>              
            </div>
      
  </div> 
  </div>  
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>