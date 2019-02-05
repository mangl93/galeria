<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/galeria/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/galeria/assets/css/estilos.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/galeria/assets/startbootstrap/css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>

    <?php
      session_start();
      include "includes/menu.php";

      $page = $_GET['page'];

      switch ($page) {
        case 'listado':
          include("actions/listado.act.php");
          include("includes/listado.inc.php");
          break;

        case 'autores':
          include("includes/listado_autores.inc.php");
          break;

        case 'new':
          include("includes/new_foto.inc.php");
          break;
        case 'edit':
          include("includes/edit_foto.inc.php");
          break;
        
      }

    ?>
  

    <!-- Page Content -->
    
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>
