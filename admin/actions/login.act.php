<?php

    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";


    $email_login = $_POST['email_login'];
    $password_login = md5 ($_POST['pass_login']);

    $connection = Connect( $config['database']);

    $sql = " select * from authors where email = '".$email_login."' and password = '".$password_login."'";

    $rows = ExecuteQuery( $sql,$connection);

    Close( $connection);

    if ( $rows[0] == "" )
    {
       header("location: ../error.php?error=1");
    } 
    else 
    {
        session_start();
        $_SESSION['id']=$rows['0']['id'];
        $_SESSION['email']=$rows['0']['email'];
        $_SESSION['session_id']=session_id();


        header("location: ../home.php?page=listado");
    }

    debug($rows) ;
