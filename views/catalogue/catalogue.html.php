<?php
require(ROUTE_DIR.'views/inc/header.html.php');
?>

</div>

<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
<img src="image/logo.png/" class="img-fluid mb-5" alt="Responsive image">   </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mb-3">
      <li class="nav-item active ">
        <a class="nav-link" href="#">acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          logement
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">se connecter</a>
          <a class="dropdown-item" href="#">s'inscrire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         contrat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">se connecter</a>
          <a class="dropdown-item" href="#">s'inscrire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown men ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         utilisateur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">se connecter</a>
          <a class="dropdown-item" href="#">s'inscrire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
  
</nav>
<img src="image/slide.png/" class="img-fluid  mt_" alt="Responsive image"> 
<div class="bottom-left">Choisissez facilement le logement de vos rêve !</div>
  </div>

<!------ Include the above in your HEAD tag ---------->
    <!-- -----------------------------------------------------------NAV BAR -->

   <div>

    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row mt-4">
        <div class="col-sm-4 mb-4 ">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />      


            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 10m</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?computer"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 49mn</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?smart"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1h</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?house"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1j</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">

        </div>
       
      </div>

      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
        </div>
      </div> 
    </div>

  <?php
require(ROUTE_DIR.'views/inc/header.html.php');
?>
