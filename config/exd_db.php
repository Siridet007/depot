<?php

$serverName = "FIRSTTY";
$dbname = "EXD-HSD";
$dbusername = '';
$dbpassword = '';
$conne = new PDO("sqlsrv:server=$serverName ; Database=$dbname; encrypt = no",$dbusername,$dbpassword,);
$conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if( $conne ) {
    // echo "Connection established.<br />";
}else{
    // echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
/*
$sqle = $conne->prepare("SELECT * FROM vBatch_Web");
//$results = $conns->query($sqls);
$sqle->execute();
$resulte = $sqle->fetchAll();
*/