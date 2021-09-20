



<nav class="navbar navbar-expand-lg navbar-light   sticky-top ">
<img src="image/logo.png/" class="img-fluid mb-5 " alt="Responsive image">   </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav  mr-auto mb-3">
      <li class="nav-item active ">
        <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          demande
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">envoyer une demande de location</a>
        </div>
      </li>
      
      
    </ul>
  <ul class="ml-auto">
  <li class="nav-item dropdown men  ">
        <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         utilisateur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=connexion'?>">se connecter</a>
          <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=inscription'?>">s'inscrire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
  </ul>
</nav>