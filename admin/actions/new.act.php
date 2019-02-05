<?php

    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";

    # debug ( $_POST);

    $display_name = $_POST['display_name'];
    $email = $_POST['email'];
    $password = md5 ($_POST['pass']);
    if ( isset($_POST['enabled']))
    {
        $enabled = 1;
    } else {
        
        $enabled = 0;
        
    }

    $connection = Connect( $config['database']);

    $sql = " insert into authors(name,email,password,enabled) values ( '".$display_name."','".$email."','".$password."','".$enabled."' )";


    $return = Execute( $sql, $connection);

    Close( $connection);