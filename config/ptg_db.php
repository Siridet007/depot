<?php
$serverName = "FIRSTTY";
$dbname = "PT-MK";
$dbusername = '';
$dbpassword = '';
$conn = new PDO("sqlsrv:server=$serverName ; Database=$dbname; encrypt = no",$dbusername,$dbpassword,);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn) {
   // echo "Connection established.<br />";
} else {
    //echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}
$sqls = $conn->prepare("SELECT * FROM vTank");
$sqlsb = $conn->prepare("SELECT * FROM vBatch");

$sqls->execute();
$sqlsb->execute();
$resultt = $sqls->fetchAll();
$resulttb = $sqlsb->fetchAll();
?>