<?php
    include dirname( dirname( dirname(  __FILE__))) . "/common/config.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/mysql.php";
    include dirname( dirname( dirname(  __FILE__))) . "/common/utils.php";

    $connection = Connect( $config['database']);
    $sql = "SELECT i.*,a.name as autor FROM `images` as i JOIN authors as a On i.author_id = a.author_id order by id DESC";
    $rows = ExecuteQuery( $sql,$connection);

    Close( $connection);
