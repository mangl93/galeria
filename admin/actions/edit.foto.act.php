<?php 

    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";



    $connection = Connect( $config['database']);
    
    $id = $_POST['id'];
    $author_id = $_POST['author_id'];
    $name = $_POST['name'];
    $text = $_POST['text'];
    if ( isset($_POST['enabled']))
    {
        $enabled = 1;
    } else {
        
        $enabled = 0;
        
    }


    if ( $_FILES['fichero']['name'] != "") 
    
    {

        move_uploaded_file( $_FILES["fichero"]["tmp_name"] , "../../images/" . $_FILES["fichero"]["name"]);

        $fichero = $_FILES['fichero']['name'];
        $size = $_FILES['fichero']['size'];

        $sql = "update images set author_id = '".$author_id."', name = '".$name."', text = '".$text."', size = '".$size."', file = '".$fichero."', enabled = '".$enabled."' where id = '".$id;
    }
    else 
    {
        $sql = "update images set author_id = '".$author_id."', name = '".$name."', text = '".$text."', enabled = '".$enabled."' where id = '".$id."';";
    }

    debug ( $sql);

    $return = Execute( $sql, $connection);

    Close( $connection);


    header("location: ../home.php?page=listado");

