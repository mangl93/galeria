<?php
    include dirname( dirname( dirname(  __FILE__))) . "/galeria/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/galeria/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/galeria/common/utils.php";

    $connection = Connect( $config['database']);
    $page = $_GET['page'];
    if ( $page == 'listado')
    {
        $sql = "delete FROM `images` where id = " . $_GET['id'];
        header("location: home.php?page=listado");

    }
    else 
    {
        $sql = "delete FROM `authors` where author_id = " . $_GET['id'];
        header("location: home.php?page=autores");

    }
    $return = Execute( $sql,  $connection);

    
    Close( $connection);
    

    ?>