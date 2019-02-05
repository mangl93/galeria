<?php
    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";

    $connection = Connect( $config['database']);
    $sql = "SELECT * FROM `authors` order by name DESC";
    $rows = ExecuteQuery( $sql,$connection);

    $sql_foto = "SELECT * FROM `images` where id = ". $_GET['id'];
    $rows_f = ExecuteQuery(  $sql_foto, $connection);

    $rows_fotos = $rows_f[0];

    if ( $rows_fotos['text'] == 0)
    {
        $enabled = 0;
    }
    else 
    {
        $enabled = 1;
    }

    Close( $connection);




?>

<div class="container">
  
 
    <div class="row ">
      
    <div class="col-lg-12 text-left">

      <h2 class="mt-5">Editar foto</h2>

    </div>

    </div>

    <div class="row form-horizontal">
      
      <div class="col-lg-12 text-left">

        <div class="col-lg-2 text-left">

        </div>

        <div class="col-lg-10 text-left">
          
          <form role="form" action="actions/edit.foto.act.php" method="post" enctype="multipart/form-data">

            <div class="form-group row">


              <label for="display_name" class="col-form-label"><h6>Autor</h6></label>

                <div class="col-lg-12 text-left">
                <input type="hidden" class="form-control" id="name" name="id" value="<?php echo $rows_fotos['id'] ?>">

                    <select class="form-control" name="author_id" id="author_id">

                        <?php
                            foreach ( $rows as $row )
                            {
                                echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                        ?>

                    </select>
                </div>

            </div>   

        

            <div class="form-group row">


              <label for="display_name" class="col-form-label"><h6>Nombre</h6></label>

                <div class="col-lg-12 text-left">

                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $rows_fotos['name'] ?>">

            </div>

        </div>

            <div class="form-group row">


                <label for="display_name" class="col-form-label"><h6>Fichero</h6></label>

                    <div class="col-lg-12 text-left">

                    <input type="file" class="form-control" id="file" name="fichero" value=""><?php echo $rows_fotos['file'] ?>

                    </div>
                    
            </div>

            <div class="form-group row">


                <label for="size" class="col-form-label"><h6>Texto</h6></label>

                    <div class="col-lg-4 text-left">

                    <textarea rows="5" cols="60" id="text" name="text" value=""><?php echo $rows_fotos['text']?></textarea> 

                    </div>
                    
            </div>

            <div class="form-group row">

                <label for="display_name" class="col-lg-2 col-form-label"><h6>Activado</h6></label>

                    <div class="col-lg-4 text-left mt-3">

                    <input type="checkbox" class="form-control" id="Activado" name="enabled" <?php echo $enabled ?>>

                    </div>
                    
            </div>
                
            <div class="form-group row">

                <div class="col-lg-3 text-left ">

                    <input type="submit" class="form-control btn btn-info" >
    
                </div>

            </div>
                    
            </div>


            </form>

        </div>

        <div class="col-lg-2 text-left">

        </div>


      </div>

    </div>  




</div>