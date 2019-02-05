<?php
    include dirname( dirname( dirname(  __FILE__))) . "/htdocs/galeria/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/htdocs/galeria/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/htdocs/galeria/common/utils.php";

    $connection = Connect( $config['database']);
    $sql = "SELECT * FROM `images` where enabled = 1 order by id DESC";
    $rows = ExecuteQuery( $sql,$connection);

    Close( $connection);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/startbootstrap/css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="admin/index.php?page=login">ADMIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> Gallery</h1>
        </div>
        <?php 
          foreach ($rows as $row ) 
          {
            echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="" href="#">
                <img class="img-responsive img-thumbnail css_img" src="images/'.$row['file']
                  .'" alt="">
                  </a>'.$row['name'].'
                </div>';

          }

        ?>
      
      </div>
    <!-- Page Content -->
    
      
        




           <!-- Footer -->
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p></p>
          </div>
        </div>
      </footer>

    <!-- /.container -->
    </div>


 
  

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>
