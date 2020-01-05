<?php 
function Head($titre){ ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php echo $titre ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo RACINE_GLOBAL_RELATIF ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo RACINE_GLOBAL_RELATIF ?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RACINE_GLOBAL_RELATIF ?>css/style.css">
    <script src="https://kit.fontawesome.com/1b22f83301.js" crossorigin="anonymous"></script>
  </head>
  <body>
<?php } 

function Footer() { ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo RACINE_GLOBAL_RELATIF ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo RACINE_GLOBAL_RELATIF ?>js/bootstrap.js"></script>
    <script src="<?php echo RACINE_GLOBAL_RELATIF ?>js/vue.js"></script>
  </body>
</html>
<?php }

function Menu(){ ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(106, 196, 112, 0.2);">
  <a class="navbar-brand navigation" href="#"><i class="fas fa-cookie"></i> Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Recettes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Générateur de repas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
  <a class="navbar-brand navigation" href="#">Ajouter une recette</a>
  <button class="btn btn-lg navigation"><i class="fas fa-sign-in-alt"></i> Connexion</button>
</nav>
<?php }




?>