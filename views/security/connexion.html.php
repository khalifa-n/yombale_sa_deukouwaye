<?php
require(ROUTE_DIR.'views/inc/header.html.php');
?>
<?php
require(ROUTE_DIR.'views/inc/menu.html.php');
?>
  <div class="container-fluid" >
	
    <div class="row">
            <div class="card-body mt-5 col-md-5 mb-5  ml-auto mr-auto"style="background-color:#7D5939 " >
              <div class="container_form"style="background-color:white">
                
             
              <form class="m-auto">
                <p class=" connexion"> connexion</p>
                    <div class="form-group mt-5 mr-5 ml-5"  >
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"style="background-color:#D3D0C9" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group  mr-5 ml-5">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" style="background-color:#D3D0C9" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                        <button type="submit" style="background-color:#7D5939" class="btn mr-5 mt-3 mb-5 ml-5 ">connexion</button>
                       <a href="<?= WEB_ROUTE.'?controlleurs=security&views=catalogue'?>"><button style="background-color:#7D5939" class="btn mt-5 ml-5  ">creer un compte</button></a>

              </form>  
              </div>              
            </div>
      
  </div> 
  </div>  
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');
?>