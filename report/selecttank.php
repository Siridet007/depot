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
    <link rel="stylesheet" href="../css/tank.css">
    <link rel="stylesheet" href="../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/card1.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">
    <title>เลือกรายงานแบบรายวันหรือรายเดือน</title>
    <style>
        body {
            background-color: #eefdfd;
        }
        .card{
            background-color: #FFFFFF;
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
            <ul class="navbar-nav">

                <li class="nav-item active" style="margin-left:20px">
                    <?php if (($_GET['name'] == 'susco')) { ?>
                        <a class="nav-link"
                            href="../tank/susco.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                            กลับหน้าคลัง
                        </a>
                    <?php } else if (($_GET['name'] == 'bck')) { ?>
                            <a class="nav-link"
                                href="../tank/bck.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                กลับหน้าคลัง
                            </a>
                    <?php } else if (($_GET['name'] == 'pkn')) { ?>
                                <a class="nav-link"
                                    href="../tank/pkn.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                    กลับหน้าคลัง
                                </a>
                    <?php } else if (($_GET['name'] == 'ptg')) { ?>
                                    <a class="nav-link"
                                        href="../tank/ptg.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                        กลับหน้าคลัง
                                    </a>
                    <?php } else if (($_GET['name'] == 'mk')) { ?>
                                        <a class="nav-link"
                                            href="../tank/shell.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                            กลับหน้าคลัง
                                        </a>
                    <?php } ?>
                </li>

            </ul>
        </div> <!-- navbar-collapse.// -->
        <a style="color:white;font-size:25px;">
            ชื่อผู้ใช้งาน :
            <?php echo $_GET['user'] ?>
        </a>
        <a href="../logout.php">
            <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
        </a>
    </nav>

    <div class="container">
        <div class="card">
            <br>
            <?php if ($_GET['name'] == 'susco') { ?>
                <center>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="../images/Susco_Logo.png" class="image"
                                    style="height:80px;width:80px;margin-right:20px;">
                            </td>
                            <td>
                                <h1 class="card-title"><b>คลังน้ำมันราษฎร์บูรณะ</b></h1>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php } ?>
            <?php if ($_GET['name'] == 'bck') { ?>
                <center>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="../images/PTT_Logo.png" class="image"
                                    style="height:80px;width:80pxmargin-right:20px;">
                            </td>
                            <td>
                                <h1 class="card-title">คลังน้ำมันปิโตรเลียมบางจาก</h1>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php } ?>
            <?php if ($_GET['name'] == 'pkn') { ?>
                <center>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="../images/PTT_Logo.png" class="image"
                                    style="height:80px;width:80px;margin-right:20px;">
                            </td>
                            <td>
                                <h1 class="card-title"><b>คลังน้ำมันปตท.พระโขนง</b></h1>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php } ?>
            <?php if ($_GET['name'] == 'ptg') { ?>
                <center>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="../images/PTG_Logo.jpg" class="image"
                                    style="height:80px;width:80px;margin-right:20px;">
                            </td>
                            <td>
                                <h1 class="card-title"><b>คลังน้ำมันพีทีจีแม่กลอง</b></h1>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php } ?>
            <?php if ($_GET['name'] == 'mk') { ?>
                <center>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="../images/Shell_Logo.png" class="image"
                                    style="height:80px;width:80px;margin-right:20px;">
                            </td>
                            <td>
                                <h1 class="card-title"><b>คลังน้ำมันเชลล์แม่กลอง</b></h1>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php } ?>
            <br>
            <center>
                <h2><b>รายงานระดับน้ำมันในถังเก็บ</b></h2>
            </center>
            <div class="row">
                <div class="col">
                    <center>
                        <div class="card" style="width:300px">
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">กรุณาเลือกวันที่ <br>วัน/เดือน/ปี</h4>
                                    <center>
                            </div>
                            <center>
                                <?php if ($_GET['name'] == 'susco') { ?>
                                    <form action="tank/report_tank_susco.php" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <select name="day" required="required">
                                                    <option value="" selected>วัน</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="month" required="required">
                                                    <option value="" selected>เดือน</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="year" required="required">
                                                    <option value="" selected>ปี</option>
                                                    <option value="2565">2565</option>
                                                    <option value="2566">2566</option>
                                                    <option value="2567">2567</option>
                                                    <option value="2568">2568</option>
                                                    <option value="2569">2569</option>
                                                    <option value="2570">2570</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                <input name="id" type="hidden" value="<?= $aa ?>">
                                                <button class="btn btn-primary" type="submit" name="save"
                                                    style="font-size:20px" formtarget="_blank">
                                                    รายวัน
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                <?php } else if ($_GET['name'] == 'bck') { ?>
                                        <form action="tank/report_tank_bck.php" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <select name="day" required="required">
                                                        <option value="" selected>วัน</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="month" required="required">
                                                        <option value="" selected>เดือน</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="year" required="required">
                                                        <option value="" selected>ปี</option>
                                                        <option value="2565">2565</option>
                                                        <option value="2566">2566</option>
                                                        <option value="2567">2567</option>
                                                        <option value="2568">2568</option>
                                                        <option value="2569">2569</option>
                                                        <option value="2570">2570</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                    <input name="id" type="hidden" value="<?= $aa ?>">
                                                    <button class="btn btn-primary" type="submit" name="save"
                                                        style="font-size:20px" formtarget="_blank">
                                                        รายวัน
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                <?php } else if ($_GET['name'] == 'pkn') { ?>
                                            <form action="tank/report_tank_pkn.php" method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="day" required="required">
                                                            <option value="" selected>วัน</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="month" required="required">
                                                            <option value="" selected>เดือน</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="year" required="required">
                                                            <option value="" selected>ปี</option>
                                                            <option value="2565">2565</option>
                                                            <option value="2566">2566</option>
                                                            <option value="2567">2567</option>
                                                            <option value="2568">2568</option>
                                                            <option value="2569">2569</option>
                                                            <option value="2570">2570</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                        <input name="id" type="hidden" value="<?= $aa ?>">
                                                        <button class="btn btn-primary" type="submit" name="save"
                                                            style="font-size:20px" formtarget="_blank">
                                                            รายวัน
                                                        </button>
                                                    </div>
                                                </div>
                                                <br>
                                            </form>
                                <?php } else if ($_GET['name'] == 'ptg') { ?>
                                                <form action="tank/report_tank_ptg.php" method="post">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select name="day" required="required">
                                                                <option value="" selected>วัน</option>
                                                                <option value="01">01</option>
                                                                <option value="02">02</option>
                                                                <option value="03">03</option>
                                                                <option value="04">04</option>
                                                                <option value="05">05</option>
                                                                <option value="06">06</option>
                                                                <option value="07">07</option>
                                                                <option value="08">08</option>
                                                                <option value="09">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="month" required="required">
                                                                <option value="" selected>เดือน</option>
                                                                <option value="01">01</option>
                                                                <option value="02">02</option>
                                                                <option value="03">03</option>
                                                                <option value="04">04</option>
                                                                <option value="05">05</option>
                                                                <option value="06">06</option>
                                                                <option value="07">07</option>
                                                                <option value="08">08</option>
                                                                <option value="09">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="year" required="required">
                                                                <option value="" selected>ปี</option>
                                                                <option value="2565">2565</option>
                                                                <option value="2566">2566</option>
                                                                <option value="2567">2567</option>
                                                                <option value="2568">2568</option>
                                                                <option value="2569">2569</option>
                                                                <option value="2570">2570</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                            <input name="id" type="hidden" value="<?= $aa ?>">
                                                            <button class="btn btn-primary" type="submit" name="save"
                                                                style="font-size:20px" formtarget="_blank">
                                                                รายวัน
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </form>
                                <?php } else if ($_GET['name'] == 'mk') { ?>
                                                    <form action="tank/report_tank_mk.php" method="post">
                                                        <div class="row">
                                                            <div class="col">
                                                                <select name="day" required="required">
                                                                    <option value="" selected>วัน</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <select name="month" required="required">
                                                                    <option value="" selected>เดือน</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <select name="year" required="required">
                                                                    <option value="" selected>ปี</option>
                                                                    <option value="2565">2565</option>
                                                                    <option value="2566">2566</option>
                                                                    <option value="2567">2567</option>
                                                                    <option value="2568">2568</option>
                                                                    <option value="2569">2569</option>
                                                                    <option value="2570">2570</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                                <input name="id" type="hidden" value="<?= $aa ?>">
                                                                <button class="btn btn-primary" type="submit" name="save"
                                                                    style="font-size:20px" formtarget="_blank">
                                                                    รายวัน
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </form>
                                <?php } ?>

                            </center>
                        </div>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <div class="card" style="width:300px">
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">กรุณาเลือกเดือน <br>เดือน/ปี</h4>
                                    <center>
                            </div>
                            <center>
                                <?php if ($_GET['name'] == 'susco') { ?>
                                    <form action="tank/report1_tank_susco.php" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <select name="month" required="required">
                                                    <option value="" selected>เดือน</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="year" required="required">
                                                    <option value="" selected>ปี</option>
                                                    <option value="2565">2565</option>
                                                    <option value="2566">2566</option>
                                                    <option value="2567">2567</option>
                                                    <option value="2568">2568</option>
                                                    <option value="2569">2569</option>
                                                    <option value="2570">2570</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                <input name="id" type="hidden" value="<?= $aa ?>">
                                                <button class="btn btn-primary" type="submit" name="save"
                                                    style="font-size:20px" formtarget="_blank">
                                                    รายเดือน
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                <?php } else if ($_GET['name'] == 'bck') { ?>
                                        <form action="tank/report1_tank_bck.php" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <select name="month" required="required">
                                                        <option value="" selected>เดือน</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="year" required="required">
                                                        <option value="" selected>ปี</option>
                                                        <option value="2565">2565</option>
                                                        <option value="2566">2566</option>
                                                        <option value="2567">2567</option>
                                                        <option value="2568">2568</option>
                                                        <option value="2569">2569</option>
                                                        <option value="2570">2570</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                    <input name="id" type="hidden" value="<?= $aa ?>">
                                                    <button class="btn btn-primary" type="submit" name="save"
                                                        style="font-size:20px" formtarget="_blank">
                                                        รายเดือน
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                <?php } else if ($_GET['name'] == 'pkn') { ?>
                                            <form action="tank/report1_tank_pkn.php" method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="month" required="required">
                                                            <option value="" selected>เดือน</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="year" required="required">
                                                            <option value="" selected>ปี</option>
                                                            <option value="2565">2565</option>
                                                            <option value="2566">2566</option>
                                                            <option value="2567">2567</option>
                                                            <option value="2568">2568</option>
                                                            <option value="2569">2569</option>
                                                            <option value="2570">2570</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                        <input name="id" type="hidden" value="<?= $aa ?>">
                                                        <button class="btn btn-primary" type="submit" name="save"
                                                            style="font-size:20px" formtarget="_blank">
                                                            รายเดือน
                                                        </button>
                                                    </div>
                                                </div>
                                                <br>
                                            </form>
                                <?php } else if ($_GET['name'] == 'ptg') { ?>
                                                <form action="tank/report1_tank_ptg.php" method="post">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select name="month" required="required">
                                                                <option value="" selected>เดือน</option>
                                                                <option value="01">01</option>
                                                                <option value="02">02</option>
                                                                <option value="03">03</option>
                                                                <option value="04">04</option>
                                                                <option value="05">05</option>
                                                                <option value="06">06</option>
                                                                <option value="07">07</option>
                                                                <option value="08">08</option>
                                                                <option value="09">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="year" required="required">
                                                                <option value="" selected>ปี</option>
                                                                <option value="2565">2565</option>
                                                                <option value="2566">2566</option>
                                                                <option value="2567">2567</option>
                                                                <option value="2568">2568</option>
                                                                <option value="2569">2569</option>
                                                                <option value="2570">2570</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                            <input name="id" type="hidden" value="<?= $aa ?>">
                                                            <button class="btn btn-primary" type="submit" name="save"
                                                                style="font-size:20px" formtarget="_blank">
                                                                รายเดือน
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </form>
                                <?php } else if ($_GET['name'] == 'mk') { ?>
                                                    <form action="tank/report1_tank_mk.php" method="post">
                                                        <div class="row">
                                                            <div class="col">
                                                                <select name="month" required="required">
                                                                    <option value="" selected>เดือน</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <select name="year" required="required">
                                                                    <option value="" selected>ปี</option>
                                                                    <option value="2565">2565</option>
                                                                    <option value="2566">2566</option>
                                                                    <option value="2567">2567</option>
                                                                    <option value="2568">2568</option>
                                                                    <option value="2569">2569</option>
                                                                    <option value="2570">2570</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col">
                                                <?php $aa = $_GET['name'] ?>
                                                                <input name="id" type="hidden" value="<?= $aa ?>">
                                                                <button class="btn btn-primary" type="submit" name="save"
                                                                    style="font-size:20px" formtarget="_blank">
                                                                    รายเดือน
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </form>
                                <?php } ?>

                            </center>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>

</html>