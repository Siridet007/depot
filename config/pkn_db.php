<?php
$serverName = "FIRSTTY";
$dbname = "PTT-PKN";
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
$sqls = $conn->prepare("SELECT * FROM Tank");
$sqlsb = $conn->prepare("SELECT * FROM Batch");

$sqls->execute();
$sqlsb->execute();
$resultp = $sqls->fetchAll();
$resultpb = $sqlsb->fetchAll();
?>