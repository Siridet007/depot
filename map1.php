<?php
session_start();
require_once 'config/db.php';
if (!isset($_SESSION['admin_login'])) {
$_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
header('location: loginform.php');

}
require_once 'db/signin_db.php';

if(isset($_SESSION['admin_login'])){
  $user_id = $_SESSION['admin_login'];
  $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-th.css">
    <link rel="stylesheet" href="css/navbar.css">



    <title>เลือกคลัง</title>
    <style>
        body {
            background-color: white;
        }

        img#zzz {
            position: absolute;
            z-index: 0;
        }

        .card {
            text-align: left;
            padding: 30px 40px;
            margin: -10%;
            margin-top: 5px;
            width: 1340px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
        }
    </style>
</head>

<body>
<div class="header">
        <ul class="menu">
            <a href="map.php">
                <li style="font-size:25px">หน้าหลัก</li>
            </a>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <p style="color:white;font-size:25px;margin-top:10px;">
                ชื่อผู้ใช้งาน : สรรพสามิตพื้นที่สมุทรสงคราม
            </p>
            <li></li>
            <a href="../loginform.php"><li class="btn btn btn-danger pull-center" style="font-size:20px">ออกจากระบบ</li></a>
        </ul>
    </div>
    <div class="container">
        <div class="card" style="height:720px;width:auto;">
            <h1 align="center" class="text-center mt-1">
                ระบบป้องกันน้ำมันชายฝั่ง
            </h1>

            <div class="d-flex justify-content-center mx-auto mt-2">
                <img src="images/maps3.png" id="zzz" style="width:450px;height:600px;">
                <div class="btn-group dropright">
                    <?php  ?>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true"
                        style="position: absolute;top: 250px;left: 80px;font-size:20px;">
                        สรรพสามิตกรุงเทพฯพื้นที่1
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="tank/susco.php"><img src="images/Susco_Logo.png"
                                style="width:30px;height:40px;">คลังน้ำมันราษฎร์บูรณะ</a>
                    </div>
                </div>
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="position: absolute;top: 360px;left: 40px;font-size:20px;">
                        สรรพสามิตกรุงเทพฯพื้นที่3
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="tank/bck.php"><img src="images/PTT_Logo.png"
                                style="width:30px;height:40px;">คลังน้ำมันปิโตรเลียมบางจาก</a>
                        <a class="dropdown-item" href="tank/pkn.php"><img src="images/PTT_Logo.png"
                                style="width:30px;height:40px;">คลังน้ำมันปตท.พระโขนง</a>
                    </div>
                </div>
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="position: absolute;top: 430px;left: -10px;font-size:20px;">
                        สรรพสามิตพื้นที่สมุทรสงคราม
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="tank/ptg.php"><img src="images/PTG_Logo.jpg"
                                style="width:30px;height:40px;">คลังน้ำมันพีทีจีแม่กลอง</a>
                        <a class="dropdown-item" href="tank/shell.php"><img src="images/Shell_Logo.png"
                                style="width:30px;height:40px;">คลังน้ำมันเชลล์แม่กลอง</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</script>

</html>