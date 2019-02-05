<script type="text/javascript">
    function delete_post( id)
    {
        var ok = confirm("Seguro que desea borrar esta imagen?");

        if ( !ok)
        {
            return false;
        }
        else
        {
            location.href = "delete.php?page=listado&id=" + id ;
        }
    }

</script>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left">
            <h2 class="mt-5">Listado de fotos</h2>
        </div> 
    </div> 
    <div class="row">
        <div class="col-lg-12 text-left">
            <a class="btn btn-lg btn-warning" href="home.php?page=new">Nueva foto</a>
        </div> 
    </div> 
    <div class="row">
        <div class="col-lg-12">

            <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre autor</th>
                    <th scope="col">Fichero</th>
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
                                <td>'.$row['id'].'</td>
                                <td>'.$row['autor'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['created'].'</td>
                                <td>'.$enabled.'</td>
                                <td><a href="home.php?page=edit&id='.$row['id'].'"><img
                                  src="../assets/img/edit.png" width=20px></a></td>
                                <td><a href="#" OnClick="delete_post('.$row['id'].')"><img
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