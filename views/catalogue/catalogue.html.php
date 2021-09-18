<?php
require(ROUTE_DIR.'views/inc/header.html.php');
?>



<nav class="navbar navbar-expand-lg navbar-light  ">
<img src="image/logo.png/" class="img-fluid mb-5 " alt="Responsive image">   </div>

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
          <a class="dropdown-item" href="">se connecter</a>
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
          <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=connexion'?>">se connecter</a>
          <a class="dropdown-item" href="#">s'inscrire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
  
</nav>
<img src="image/slide.png/" class="img-fluid  mt_" alt="Responsive image"> 
  </div>

<!------ Include the above in your HEAD tag ---------->
    <!-- -----------------------------------------------------------NAV BAR -->

   <div>

    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row mt-4">
        <div class="col-sm-5 mb-4 ml-5">
        <img src="image/img1.png/" class="img-fluid  mt_" alt="Responsive image"> 
        </div>
        <div class="col-sm-5 mb-4 ml-5 ">
        <img src="image/img1.png/" class="img-fluid  mt_" alt="Responsive image"> 
        </div> 
      </div> 
      <div class="row mt-4">
        <div class="col-sm-5 mb-4 ml-5">
        <img src="image/img1.png/" class="img-fluid  mt_" alt="Responsive image"> 
        </div>
        <div class="col-sm-5 mb-4 ml-5 ">
        <img src="image/img1.png/" class="img-fluid  mt_" alt="Responsive image"> 
        </div> 
      </div> 
    </div>
    <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
    <img src="image/facebook.png/" class="img-fluid  ml" alt="Responsive image"> 
    <img src="image/instagram.png/" class="img-fluid  ml-3" alt="Responsive image"> 
    <img src="image/snapchat.png/" class="img-fluid  ml-3" alt="Responsive image"> 
    <img src="image/twitter.png/" class="img-fluid  ml-3" alt="Responsive image"> 
 
     
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  @2020 | Yombale sa deukouwaye | All Rights Reserved !!   
  </div>
  <!-- Copyright -->
</footer>
  <?php
require(ROUTE_DIR.'views/inc/header.html.php');
?>
