<?php
    $serverName = "FIRSTTY";
    $dbName = "User";
    $dbusername = '';
    $dbpassword = '';
    $conn = new PDO("sqlsrv:server=$serverName ; Database=$dbName; encrypt = no",$dbusername,$dbpassword,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if( $conn ) {
        // echo "Connection established.<br />";
    }else{
        // echo "Connection could not be established.<br />";
         die( print_r( sqlsrv_errors(), true));
    }
?>