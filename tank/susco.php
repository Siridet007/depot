<?php
require_once '../config/susco_db.php';
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
    <link rel="stylesheet" href="../css/tank.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/nav2.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">
    <title>คลังน้ำมันราษฎร์บูรณะ</title>
    <style>
        .card {
            text-align: left;
            padding: 30px 40px;
            margin: -10%;
            margin-top: 20px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
            z-index: -1;
            background-color: #F8F6F0;

        }

        .card1 {
            text-align: left;
            padding: 30px 40px;
            margin: 0%;
            margin-top: 20px;
            margin-bottom: 5px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
            background-color: #FFFFFF;

        }

        body {
            background-color: #eefdfd;
        }

        .tk {
            /*Liquid Section*/
            position: relative;
            width: 110px;
            height: 100px;
            padding-top: 50px;
            margin: 0 auto;
            background: #FF8C00;
            border-radius: 100%/30px;
            border-bottom: 1px solid #000;
            text-align: center;
            z-index: 1;
            overflow: hidden;
            /*float: left;*/
            margin: 10px;
        }

        .tk:after,
        .lq {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20%;
            z-index: -1;
        }

        .lq {
            background: rgba(217, 213, 213, 0.99);
            height: 0%;
            top: 0px;
            border-radius: 100%/30px;
            border-bottom: 3px solid #000;
        }

        .tk:after {
            height: 30%;
            border: 1px solid #000;
            border-radius: 100%/30px;
            /*makes circle at top*/
        }

        /* ------------------------------- */

        .tk1 {
            /*Liquid Section*/
            position: relative;
            width: 110px;
            height: 100px;
            padding-top: 50px;
            margin: 0 auto;
            background: #FF8C00;
            border-radius: 100%/30px;
            border-bottom: 1px solid #000;
            text-align: center;
            z-index: 1;
            overflow: hidden;
            /*float: left;*/
            margin: 10px;
        }

        .tk1:after,
        .lq1 {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20%;
            z-index: -1;
        }

        .lq1 {
            background: rgba(217, 213, 213, 0.99);
            height: 0%;
            top: 0px;
            border-radius: 100%/30px;
            border-bottom: 3px solid #000;
        }

        .tk1:after {
            height: 30%;
            border: 1px solid #000;
            border-radius: 100%/30px;
            /*makes circle at top*/
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
            <ul class="navbar-nav" style="margin-left:20px">
                <li class="nav-item active">
                    <a class="nav-link" href="../maps/map.php"
                        style="margin-right:50px;margin-left:20px;">คลังน้ำมัน<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#fff;margin-left:20px;" href="#"
                        data-toggle="dropdown"> ระบบเอกสาร
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <a class="dropdown-item"
                            href="../document/doc9.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.9</a>
                        <a class="dropdown-item"
                            href="../document/doc10.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.10</a>
                        <a class="dropdown-item"
                            href="../document/doc101.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.10/1</a>
                        <a class="dropdown-item"
                            href="../report/selectoil.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">รายงานการรับน้ำมัน</a>
                        <a class="dropdown-item"
                            href="../report/selecttank.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">รายงานระดับน้ำมันในถังเก็บ</a>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a style="color:whte;font-size:25px;">
                    ชื่อผู้ใช้งาน :
                    <?php echo $_GET['user'] ?>
                </a>
                <a href="../logout.php">
                    <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
                </a>
            </ul>

        </div>
    </nav>
    <!--
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="../images/Sub-logo.png" style="max-width:150px;margin-right:370px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../maps/map.php"
                        style="margin-right:50px;margin-left:20px;">คลังน้ำมัน<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#fff;margin-left:20px;" href="#"
                        data-toggle="dropdown"> ดูเอกสาร
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <a class="dropdown-item"
                            href="../document/doc9.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.9</a>
                        <a class="dropdown-item"
                            href="../document/doc10.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.10</a>
                        <a class="dropdown-item"
                            href="../document/doc101.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">เอกสาร
                            น.ม.10/1</a>
                        <a class="dropdown-item"
                            href="../report/selectoil.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">รายงานการรับน้ำมัน</a>
                        <a class="dropdown-item"
                            href="../report/selecttank.php?name=susco&id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">รายงานระดับน้ำมันในถังเก็บ</a>
                    </ul>
                </li>
            </ul>
        </div> 

        <a style="color:white;font-size:25px;">
            ชื่อผู้ใช้งาน :
            <?php echo $_GET['user'] ?>
        </a>
        <a href="../logout.php">
            <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
        </a>
    </nav>
    -->
    <div class="container">
        <div class="card">
            <div class="card-body" style="width:auto;">
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
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-5 col-md-6 ">
                    <div class="card1 info-card">
                        <p style="font-size:25px;margin-top:-20px;"><b>TK-05</b></p>
                        <div class="d-flex align-items-center">
                            <?php foreach ($results as $tank) { ?>
                                <div class="tk" data-amount="<?php echo $tank['TK05_Level'] ?>">
                                    <p>
                                        <?php
                                        $a = $tank['TK05_Level'];
                                        $b = (($a / 100) * 100);
                                        ?>
                                        <?php echo ceil($b) ?>%
                                    </p>
                                    <div class="lq">
                                    </div>
                                </div>
                                <div class="ps-1" style="margin-left:50px;">
                                    <table border="1" style="width:250px;">
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Temp
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK05_Temp'] ?> ํF
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                API
                                            </th>
                                            <td>
                                                :
                                                <?php echo "" . number_format($tank['TK05_Api'], 2); ?> ํAPI
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Level
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK05_Level'] ?>mm.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK05_Total'] ?>L.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume 86 ํF
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK05_Total_in_Temp'] ?>L.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Valve Status
                                            </th>
                                            <td>
                                                :
                                                <?php if ($tank['TK05_Valve_Sts'] == '1') {
                                                    echo '<font style="color:green">Open';
                                                } else {
                                                    echo '<font style="color:red">Close';
                                                } ?>
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="card1 info-card">
                            <p style="font-size:25px;margin-top:-20px;"><b>TK-06</b></p>
                            <div class="d-flex align-items-center">
                                <?php $a = $tank['TK06_Level'];
                                $b = (($a / 100) * 100);
                                ?>
                                <div class="tk1" data-amount1="<?php echo $tank['TK06_Level'] ?>">
                                    <p>
                                        <?php echo ceil($b) ?>%
                                    </p>
                                    <div class="lq1">
                                    </div>
                                </div>
                                <div class="ps-1" style="margin-left:50px;">
                                    <table border="1" style="width:250px;">
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Temp
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK06_Temp'] ?> ํF
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                API
                                            </th>
                                            <td>
                                                :
                                                <?php echo "" . number_format($tank['TK06_Api'], 2); ?> ํAPI
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Level
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK06_Level'] ?>mm.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK06_Total'] ?>L.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume 86 ํF
                                            </th>
                                            <td>
                                                :
                                                <?php echo $tank['TK06_Total_in_Temp'] ?>L.
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Valve Status
                                            </th>
                                            <td>
                                                :
                                                <?php if ($tank['TK06_Valve_Sts'] == '1') {
                                                    echo '<font style="color:green">Open';
                                                } else {
                                                    echo '<font style="color:red">Close';
                                                } ?>
                                                &nbsp;&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row gy-4 justify-content-center">
                <div class="col-xl-5 col-md-6 ">
                    <div class="card1 info-card">
                        <div class="d-flex align-items-center">
                            <div class="ps-1" style="margin-left:50px;">
                                <table border="1" style="width:320px">
                                    <tr>
                                        <?php foreach ($resultsb as $batch) { ?>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                รับครั้งที่
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Batch_NO'] ?> ํF
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Temp
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Temp'] ?> ํF
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Pressure
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Pressure'] ?>Bar.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                API
                                            </th>
                                            <td>
                                                :
                                                <?php echo "" . number_format($batch['n_Api'], 2); ?> ํAPI.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Flowrate
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_FlowRate'] ?>L/Hr.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Total'] ?>L
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume 86 ํF
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Total_in_Temp'] ?>L
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Start Date
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Time_Recieve'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Status
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['n_Status_Recieve'] ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 ">
                        <div class="card1 info-card">
                            <div class="d-flex align-items-center">
                                <div class="ps-1" style="margin-left:50px;">
                                    <table border="1" style="width:320px">
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                รับครั้งที่
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Batch_NO'] ?> ํF
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Temp
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Temp'] ?> ํF
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Pressure
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Pressure'] ?>Bar.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                API
                                            </th>
                                            <td>
                                                :
                                                <?php echo "" . number_format($batch['p_Api'], 2); ?> ํAPI.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Flowrate
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_FlowRate'] ?>L/Hr.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Total'] ?>L
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Volume 86 ํF
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Total_in_Temp'] ?>L
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Start Date
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Time_Recieve'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            &nbsp;&nbsp;&nbsp;
                                                Status
                                            </th>
                                            <td>
                                                :
                                                <?php echo $batch['p_Status_Recieve'] ?>
                                            </td>
                                        </tr>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../script/tank.js"></script>

</html>