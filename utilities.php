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





?>