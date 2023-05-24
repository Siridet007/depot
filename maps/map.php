<?php
session_start();
require_once '../config/db.php';

if (isset($_SESSION['admin_login'])) {
    $disableButton = 1;
} else if (isset($_SESSION['user1_login'])) {
    $disableButton = 2;
} else if (isset($_SESSION['user2_login'])) {
    $disableButton = 3;
} else if (isset($_SESSION['user3_login'])) {
    $disableButton = 4;
}

require_once '../db/signin_db.php';

if (isset($_SESSION['admin_login'])) {
    $user_id = $_SESSION['admin_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else if (isset($_SESSION['user1_login'])) {
    $user_id = $_SESSION['user1_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else if (isset($_SESSION['user2_login'])) {
    $user_id = $_SESSION['user2_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else if (isset($_SESSION['user3_login'])) {
    $user_id = $_SESSION['user3_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
$name = $row['firstname'] . " " . $row['lastname'];
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
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/nav1.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">



    <title>ระบบควบคุมการรับ-จ่ายน้ำมันชายฝั่ง</title>
    <style>
        body {
            background-color: #eefdfd;
        }

        img#zzz {
            position: absolute;
            z-index: 0;
        }

        .card {
            text-align: left;
            padding: 30px 40px;
            margin: -35%;
            margin-top: -17px;
            width: 1340px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
        }

        .logo {
            scale: 1.4;
        }

        footer {
            background-color: #FF8C00;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 830px;
            width: 100%;
            text-align: center;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="../images/Sub-logo.png" style="max-width:80px;margin-left:20px" class="logo">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <a style="margin-left:680px;font-size:35px;text-shadow: 2px 2px 5px red;"><b>
                    ระบบควบคุมการรับ-จ่ายน้ำมันชายฝั่ง</b>
            </a>
            <ul class="nav navbar-nav navbar-right">
                <a style="color:whte;font-size:25px;">
                    ชื่อผู้ใช้งาน :
                    <?php echo $name ?>
                </a>
                <a href="../logout.php">
                    <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
                </a>
            </ul>

        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-center mx-auto">
            <img src="../images/map3.png" id="zzz"
                style="width:1890px;height:754px;margin-top:-10px;box-shadow: 0 0 8px 8px white inset;border-radius:5px;border: 5px solid #000;">
            <?php if ($disableButton == 1) { ?>
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true"
                        style="position: absolute;top:350px;left:-230px;font-size:20px; padding: 2px;">
                        สรรพสามิตกรุงเทพฯพื้นที่1
                    </button>
                    <div class="dropdown-menu" style="background:#E0FFFF">
                        <a class="dropdown-item"
                            href="../tank/susco.php?name=susco&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                src="../images/Susco.png" style="width:20px;height:20px;">คลังน้ำมันราษฎร์บูรณะ</a>
                    </div>
                </div>
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="position: absolute;top: 400px;left: -230px;font-size:20px;padding: 2px;">
                        สรรพสามิตกรุงเทพฯพื้นที่3
                    </button>
                    <div class="dropdown-menu" style="background:#E0FFFF">
                        <a class="dropdown-item"
                            href="../tank/bck.php?name=bck&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปิโตรเลียมบางจาก</a>
                        <a class="dropdown-item"
                            href="../tank/pkn.php?name=pkn&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปตท.พระโขนง</a>
                    </div>
                </div>
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="position: absolute;top: 480px;left: -190px;font-size:20px;padding: 2px;">
                        สรรพสามิตพื้นที่สมุทรสงคราม
                    </button>
                    <div class="dropdown-menu" style="background:#E0FFFF">
                        <a class="dropdown-item"
                            href="../tank/ptg.php?name=ptg&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                src="../images/PTG.png" style="width:20px;height:20px;">คลังน้ำมันพีทีจีแม่กลอง</a>
                        <a class="dropdown-item"
                            href="../tank/shell.php?name=mk&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                src="../images/Shell.png" style="width:20px;height:20px;">คลังน้ำมันเชลล์แม่กลอง</a>
                    </div>
                </div>
            <?php } else if ($disableButton == 2) { ?>
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true"
                            style="position: absolute;top:350px;left:-230px;font-size:20px;padding: 2px;">
                            สรรพสามิตกรุงเทพฯพื้นที่1
                        </button>
                        <div class="dropdown-menu" style="background:#E0FFFF">
                            <a class="dropdown-item"
                                href="../tank/susco.php?name=susco&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                    src="../images/Susco.png" style="width:20px;height:20px;">คลังน้ำมันราษฎร์บูรณะ</a>
                        </div>
                    </div>
                    <div class="btn-group dropright" style="background:#E0FFFF">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            style="position: absolute;top: 400px;left: -230px;font-size:20px;padding: 2px;" disabled>
                            สรรพสามิตกรุงเทพฯพื้นที่3
                        </button>
                        <div class="dropdown-menu" style="background:#E0FFFF">
                            <a class="dropdown-item"
                                href="../tank/bck.php?name=bck&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>']"><img
                                    src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปิโตรเลียมบางจาก</a>
                            <a class="dropdown-item"
                                href="../tank/pkn.php?name=pkn&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                    src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปตท.พระโขนง</a>
                        </div>
                    </div>
                    <div class="btn-group dropright" style="background:#E0FFFF">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            style="position: absolute;top: 480px;left: -190px;font-size:20px;padding: 2px;" disabled>
                            สรรพสามิตพื้นที่สมุทรสงคราม
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="../tank/ptg.php?name=ptg&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                    src="../images/PTG.jpg" style="width:20px;height:20px;">คลังน้ำมันพีทีจีแม่กลอง</a>
                            <a class="dropdown-item"
                                href="../tank/shell.php?name=mk&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                    src="../images/Shell.png" style="width:20px;height:20px;">คลังน้ำมันเชลล์แม่กลอง</a>
                        </div>
                    </div>
            <?php } else if ($disableButton == 3) { ?>
                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true"
                                style="position: absolute;top:350px;left:-230px;font-size:20px;padding: 2px;" disabled>
                                สรรพสามิตกรุงเทพฯพื้นที่1
                            </button>
                            <div class="dropdown-menu" style="background:#E0FFFF">
                                <a class="dropdown-item"
                                    href="../tank/susco.php?name=susco&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                        src="../images/Susco.png" style="width:20px;height:20px;">คลังน้ำมันราษฎร์บูรณะ</a>
                            </div>
                        </div>
                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                style="position: absolute;top: 400px;left:-230px;font-size:20px;padding: 2px;">
                                สรรพสามิตกรุงเทพฯพื้นที่3
                            </button>
                            <div class="dropdown-menu" style="background:#E0FFFF">
                                <a class="dropdown-item"
                                    href="../tank/bck.php?name=bck&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                        src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปิโตรเลียมบางจาก</a>
                                <a class="dropdown-item"
                                    href="../tank/pkn.php?name=pkn&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                        src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปตท.พระโขนง</a>
                            </div>
                        </div>
                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                style="position: absolute;top: 480px;left: -190px;font-size:20px;padding: 2px;" disabled>
                                สรรพสามิตพื้นที่สมุทรสงคราม
                            </button>
                            <div class="dropdown-menu" style="background:#E0FFFF">
                                <a class="dropdown-item"
                                    href="../tank/ptg.php?name=ptg&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                        src="../images/PTG.jpg" style="width:20px;height:20px;">คลังน้ำมันพีทีจีแม่กลอง</a>
                                <a class="dropdown-item"
                                    href="../tank/shell.php?name=mk&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                        src="../images/Shell.png" style="width:20px;height:20px;">คลังน้ำมันเชลล์แม่กลอง</a>
                            </div>
                        </div>
            <?php } else if ($disableButton == 4) { ?>
                            <div class="btn-group dropright">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true"
                                    style="position: absolute;top:350px;left:-230px;font-size:20px;padding: 2px;" disabled>
                                    สรรพสามิตกรุงเทพฯพื้นที่1
                                </button>
                                <div class="dropdown-menu" style="background:#E0FFFF">
                                    <a class="dropdown-item"
                                        href="../tank/susco.php?name=susco&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                            src="../images/Susco.png" style="width:20px;height:20px;">คลังน้ำมันราษฎร์บูรณะ</a>
                                </div>
                            </div>
                            <div class="btn-group dropright">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    style="position: absolute;top: 400px;left:-230px;font-size:20px;padding: 2px;" disabled>
                                    สรรพสามิตกรุงเทพฯพื้นที่3
                                </button>
                                <div class="dropdown-menu" style="background:#E0FFFF">
                                    <a class="dropdown-item"
                                        href="../tank/bck.php?name=bck&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                            src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปิโตรเลียมบางจาก</a>
                                    <a class="dropdown-item"
                                        href="../tank/pkn.php?name=pkn&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                            src="../images/PTT.png" style="width:20px;height:20px;">คลังน้ำมันปตท.พระโขนง</a>
                                </div>
                            </div>
                            <div class="btn-group dropright" style="background:#E0FFFF">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    style="position: absolute;top: 480px;left: -190px;font-size:20px;padding: 2px;">
                                    สรรพสามิตพื้นที่สมุทรสงคราม
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="../tank/ptg.php?name=ptg&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                            src="../images/PTG.jpg" style="width:20px;height:20px;">คลังน้ำมันพีทีจีแม่กลอง</a>
                                    <a class="dropdown-item"
                                        href="../tank/shell.php?name=mk&id=<?php echo $row['id'] ?>&user=<?php echo $name ?>"><img
                                            src="../images/Shell.png" style="width:20px;height:20px;">คลังน้ำมันเชลล์แม่กลอง</a>
                                </div>
                            </div>
            <?php } ?>

        </div>
    </div>
    <!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5"
        style="background-color: #FF8C00;">
        <div class="col-md-6 d-flex align-items-center">
        <img src="../images/unity1.png" style="width:120px;">
            <span class="mb-md-0 text-muterd">
                <h1 style="margin-left:20px;font-size:18px">© 2023 Siridet Wongnarat | Unity Focus All right reserved</h1>
            </span>
        </div>
        <!--
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter"></use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram"></use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                    </svg>
                </a>
            </li>
        </ul>
            -->
    </footer>
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