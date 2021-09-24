

<nav class="navbar navbar-expand-lg navbar-light"    >
<img src="image/logo.png/" class="img-fluid mb-5 " alt="Responsive image">   </div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse menu" id="navbarSupportedContent">
  <ul class="navbar-nav  mr-auto mb-3">
    <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=visiteur&views=visiteur'?>">Acceuil <span class="sr-only">(current)</span></a>
    </li>
  
  
      

    <?php if (est_gestionnaire())  :?>
      <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        contrat
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="">Mes contrats</a>
        <a class="dropdown-item" href="#">Signer contrat</a>
    </li>
      <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=ajoute.logement'?>">Ajouter logement<span class="sr-only">(current)</span></a>
    </li> 
    <?php endif?> 

    
    <?php if (est_client())  :?>
      <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">Mes demandes<span class="sr-only">(current)</span></a>
    </li> 
</div>
    </li>
    <?php endif?>  
    <?php if (est_proprietaire())  :?>
      <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">Mes contrats<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">Mes paiements<span class="sr-only">(current)</span></a>
    </li>
    <?php endif?> 
    <?php if (est_responsable_financier())  :?>
      <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">Enregistrer un loyer<span class="sr-only">(current)</span></a>
    </li>
    <?php endif?> 
  
    <?php if (est_responsable_location())  :?>
      <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">mes demandes<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active ">
      <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=catalogue'?>">Signer un contrat<span class="sr-only">(current)</span></a>
    </li> 
  </ul>
  <?php endif ?>
<ul class="utilisateur  ">
<li class="nav-item dropdown men  ">
      <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Utilisateur
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
    <?php if (est_connect())  :?> 
        <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=deconexion'?>">Se deconnecter</a>        
        <?php endif?>
        <?php if (!est_connect())  :?> 
        <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=connexion'?>">Se connecter</a> 
        <a class="dropdown-item" href="<?= WEB_ROUTE.'?controlleurs=security&views=inscription'?>">S'inscrire</a>
        <div class="dropdown-divider"></div>
        
        <?php endif?>

      </div>
    </li>
</ul>
</nav>