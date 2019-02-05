<?php
    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";

    $connection = Connect( $config['database']);
    $sql = "SELECT * FROM `authors` order by name DESC";
    $rows = ExecuteQuery( $sql,$connection);

    Close( $connection);

?>
<script type="text/javascript">
    function delete_post( id)
    {
        var ok = confirm("Seguro que desea borrar este autor?");

        if ( !ok)
        {
            return false;
        }
        else
        {
            location.href = "delete.php?page=autores&id=" + id ;
        }
    }

</script>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left">
            <h2 class="mt-5">Listado de autores</h2>
        </div> 
    </div> 

    <div class="row">
        <div class="col-lg-12">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre autor</th>
                    <th scope="col">email</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                  </tr>
                </thead>
                <tbody>

                    <?php

                        foreach ($rows as $row) 
                        {

                            if($row['enabled'] == "1" )
                            {
                                $enabled = "<img src='../assets/img/activo.png' width=20px>";
                            }
                            else
                            {
                                $enabled = "<img src='../assets/img/no-activo.png' width=20px>";
                            }

                            echo '
                                <td>'.$row['author_id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['created'].'</td>
                                <td>'.$enabled.'</td>
                                <td><a href="index.php?page=edit&id='.$row[0].'"><img
                                  src="../assets/img/edit.png" width=20px></a></td>
                                <td><a href="#" OnClick="delete_post('.$row[0].')"><img
                                  src="../assets/img/delete.png" width=20px></a></td>
                                <tr>
                            ';
                            

                        }
                    ?>
                </tbody>
            </table>

        </div> 
    </div> 
    <!-- /.container -->
    </div>
