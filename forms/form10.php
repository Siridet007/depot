<?php
session_start();
if (isset($_SESSION['db'])) {
    $name = $_SESSION['db'];
} else {
    $name = $_GET['name'];
}
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    $id = $_GET['id'];
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    $user = $_GET['user'];
}
?>
<?php
    unset($_SESSION['db']);
    unset($_SESSION['id']);
    unset($_SESSION['user']);
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
    <link rel="stylesheet" href="../css/nav1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">
    <title>เพิ่มข้อมูลเอกสาร น.ม.10</title>
    <style>
        body {
            background-color: #eefdfd;
        }
        .card1{
            margin-top: -20px;
            margin-bottom: 1px;
            background-color: white;
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
                    <?php if (($name == 'susco')) { ?>
                        <a class="nav-link"
                            href="../document/doc10.php?name=susco&id=<?php echo $id ?>&user=<?php echo $user ?>">
                            กลับหน้าเอกสาร
                        </a>
                    <?php } else if (($name == 'bck')) { ?>
                            <a class="nav-link"
                                href="../document/doc10.php?name=bck&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                กลับหน้าเอกสาร
                            </a>
                    <?php } else if (($name == 'pkn')) { ?>
                                <a class="nav-link"
                                    href="../document/doc10.php?name=pkn&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                    กลับหน้าเอกสาร
                                </a>
                    <?php } else if (($name == 'ptg')) { ?>
                                    <a class="nav-link"
                                        href="../document/doc10.php?name=ptg&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                        กลับหน้าเอกสาร
                                    </a>
                    <?php } else if (($name == 'mk')) { ?>
                                        <a class="nav-link"
                                            href="../document/doc10.php?name=mk&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                            กลับหน้าเอกสาร
                                        </a>
                    <?php } ?>
                </li>

            </ul>
        </div> <!-- navbar-collapse.// -->
        <a style="color:white;font-size:25px;">
            ชื่อผู้ใช้งาน :
            <?php echo $user ?>
        </a>
        <a href="../logout.php">
            <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
        </a>
    </nav>

    <div class="container">
        
        <div class="card1">
            <table border="0">
                <thead>
                    <tr>
                    <td width="1%">
                        <?php if ($name == 'susco') { ?>
                            <img src="../images/Susco.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'bck') { ?>
                            <img src="../images/PTT.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'pkn') { ?>
                            <img src="../images/PTT.png" class="image" style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'ptg') { ?>
                            <img src="../images/PTG.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'mk') { ?>
                            <img src="../images/Shell.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                    </td>
                    <td width="19%"> 
                        <?php if ($name == 'susco') { ?>
                            <h3><b>คลังน้ำมันราษฎร์บูรณะ</b></h3>
                        <?php } ?>
                        <?php if ($name == 'bck') { ?>
                            <h3><b>คลังน้ำมันปิโตรเลียมบางจาก</b></h3>
                        <?php } ?>
                        <?php if ($name == 'pkn') { ?>
                            <h3><b>คลังน้ำมันปตท.พระโขนง</b></h3>
                        <?php } ?>
                        <?php if ($name == 'ptg') { ?>
                            <h3><b>คลังน้ำมันพีทีจีแม่กลอง</b></h3>
                        <?php } ?>
                        <?php if ($name == 'mk') { ?>
                            <h3><b>คลังน้ำมันเชลล์แม่กลอง</b></h3>
                        <?php } ?>
                    </td>
                        <td width="60%">

                            <h2 class="text ml-5"><b>
                                &nbsp;&nbsp;&nbsp;
                                แบบรายงานการจ่ายน้ำมันภายในประเทศ<br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                (สถานีปลายทาง)</b>
                            </h2>

                        </td>
                        <td>
                            <h3 align="center"><b>น.ม.10</b></h3>
                        </td>
                    </tr>
                </thead>
            </table>
            <form action="../db/forms_dbten.php" method="post">
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['warning'])) { ?>
                    <div class="alert alert-warnig" role="alert">
                        <?php
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                        ?>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="name_depot">ชื่อโรงกลั่น / คลัง</label>
                            <input type="text" class="form-control" name="name_depot" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="province1">จังหวัด</label>
                            <select class="form-control" style="height:38px;font-size:20px" name="province1">
                                <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="กระบี่">กระบี่ </option>
                                <option value="กาญจนบุรี">กาญจนบุรี </option>
                                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                <option value="กำแพงเพชร">กำแพงเพชร </option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="จันทบุรี">จันทบุรี</option>
                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                <option value="ชัยนาท">ชัยนาท </option>
                                <option value="ชัยภูมิ">ชัยภูมิ </option>
                                <option value="ชุมพร">ชุมพร </option>
                                <option value="ชลบุรี">ชลบุรี </option>
                                <option value="เชียงใหม่">เชียงใหม่ </option>
                                <option value="เชียงราย">เชียงราย </option>
                                <option value="ตรัง">ตรัง </option>
                                <option value="ตราด">ตราด </option>
                                <option value="ตาก">ตาก </option>
                                <option value="นครนายก">นครนายก </option>
                                <option value="นครปฐม">นครปฐม </option>
                                <option value="นครพนม">นครพนม </option>
                                <option value="นครราชสีมา">นครราชสีมา </option>
                                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                <option value="นครสวรรค์">นครสวรรค์ </option>
                                <option value="นราธิวาส">นราธิวาส </option>
                                <option value="น่าน">น่าน </option>
                                <option value="นนทบุรี">นนทบุรี </option>
                                <option value="บึงกาฬ">บึงกาฬ</option>
                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                <option value="ปทุมธานี">ปทุมธานี </option>
                                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                <option value="ปัตตานี">ปัตตานี </option>
                                <option value="พะเยา">พะเยา </option>
                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                <option value="พังงา">พังงา </option>
                                <option value="พิจิตร">พิจิตร </option>
                                <option value="พิษณุโลก">พิษณุโลก </option>
                                <option value="เพชรบุรี">เพชรบุรี </option>
                                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                <option value="แพร่">แพร่ </option>
                                <option value="พัทลุง">พัทลุง </option>
                                <option value="ภูเก็ต">ภูเก็ต </option>
                                <option value="มหาสารคาม">มหาสารคาม </option>
                                <option value="มุกดาหาร">มุกดาหาร </option>
                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                <option value="ยโสธร">ยโสธร </option>
                                <option value="ยะลา">ยะลา </option>
                                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                <option value="ระนอง">ระนอง </option>
                                <option value="ระยอง">ระยอง </option>
                                <option value="ราชบุรี">ราชบุรี</option>
                                <option value="ลพบุรี">ลพบุรี </option>
                                <option value="ลำปาง">ลำปาง </option>
                                <option value="ลำพูน">ลำพูน </option>
                                <option value="เลย">เลย </option>
                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option value="สกลนคร">สกลนคร</option>
                                <option value="สงขลา">สงขลา </option>
                                <option value="สมุทรสาคร">สมุทรสาคร </option>
                                <option value="สมุทรปราการ">สมุทรปราการ </option>
                                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                <option value="สระแก้ว">สระแก้ว </option>
                                <option value="สระบุรี">สระบุรี </option>
                                <option value="สิงห์บุรี">สิงห์บุรี </option>
                                <option value="สุโขทัย">สุโขทัย </option>
                                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                <option value="สุรินทร์">สุรินทร์ </option>
                                <option value="สตูล">สตูล </option>
                                <option value="หนองคาย">หนองคาย </option>
                                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                <option value="อุดรธานี">อุดรธานี </option>
                                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                <option value="อุทัยธานี">อุทัยธานี </option>
                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                <option value="อ่างทอง">อ่างทอง </option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="tel">หมายเลขโทรศัพท์</label>
                            <input type="text" class="form-control" name="tel" style="font-size:20px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="no_bill">เลขที่เอกสาร (ตามใบกำกับสินค้า) </label>
                            <input type="text" class="form-control" name="no_bill" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name_ship">ชื่อเรือ</label>
                            <input type="text" class="form-control" name="name_ship" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="round">เที่ยวที่</label>
                            <input type="text" class="form-control" name="round" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="type_fuel">ประเภทน้ำมันที่ขน</label>
                            <select class="form-control" style="height:38px;font-size:20px" name="type_fuel">
                                <option value="" selected>--------- เลือกประเภทน้ำมัน ---------
                                </option>
                                <option>High Speed Diesel</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="origin">สถานีต้นทาง</label>
                            <br>
                            <select class="form-control" style="height:38px;font-size:20px" name="origin">
                                <option value="" selected>--------- เลือกคลัง ---------</option>
                                <option>Susco ราษฏร์บูรณะ</option>
                                <option>ปิโตเลียมบางจาก</option>
                                <option>ปตท.พระโขนง</option>
                                <option>PTG แม่กลอง</option>
                                <option>Shell แม่งกลอง</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="province2">จังหวัด</label>
                            <select class="form-control" style="height:38px;font-size:20px" name="province2">
                                <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="กระบี่">กระบี่ </option>
                                <option value="กาญจนบุรี">กาญจนบุรี </option>
                                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                <option value="กำแพงเพชร">กำแพงเพชร </option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="จันทบุรี">จันทบุรี</option>
                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                <option value="ชัยนาท">ชัยนาท </option>
                                <option value="ชัยภูมิ">ชัยภูมิ </option>
                                <option value="ชุมพร">ชุมพร </option>
                                <option value="ชลบุรี">ชลบุรี </option>
                                <option value="เชียงใหม่">เชียงใหม่ </option>
                                <option value="เชียงราย">เชียงราย </option>
                                <option value="ตรัง">ตรัง </option>
                                <option value="ตราด">ตราด </option>
                                <option value="ตาก">ตาก </option>
                                <option value="นครนายก">นครนายก </option>
                                <option value="นครปฐม">นครปฐม </option>
                                <option value="นครพนม">นครพนม </option>
                                <option value="นครราชสีมา">นครราชสีมา </option>
                                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                <option value="นครสวรรค์">นครสวรรค์ </option>
                                <option value="นราธิวาส">นราธิวาส </option>
                                <option value="น่าน">น่าน </option>
                                <option value="นนทบุรี">นนทบุรี </option>
                                <option value="บึงกาฬ">บึงกาฬ</option>
                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                <option value="ปทุมธานี">ปทุมธานี </option>
                                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                <option value="ปัตตานี">ปัตตานี </option>
                                <option value="พะเยา">พะเยา </option>
                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                <option value="พังงา">พังงา </option>
                                <option value="พิจิตร">พิจิตร </option>
                                <option value="พิษณุโลก">พิษณุโลก </option>
                                <option value="เพชรบุรี">เพชรบุรี </option>
                                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                <option value="แพร่">แพร่ </option>
                                <option value="พัทลุง">พัทลุง </option>
                                <option value="ภูเก็ต">ภูเก็ต </option>
                                <option value="มหาสารคาม">มหาสารคาม </option>
                                <option value="มุกดาหาร">มุกดาหาร </option>
                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                <option value="ยโสธร">ยโสธร </option>
                                <option value="ยะลา">ยะลา </option>
                                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                <option value="ระนอง">ระนอง </option>
                                <option value="ระยอง">ระยอง </option>
                                <option value="ราชบุรี">ราชบุรี</option>
                                <option value="ลพบุรี">ลพบุรี </option>
                                <option value="ลำปาง">ลำปาง </option>
                                <option value="ลำพูน">ลำพูน </option>
                                <option value="เลย">เลย </option>
                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option value="สกลนคร">สกลนคร</option>
                                <option value="สงขลา">สงขลา </option>
                                <option value="สมุทรสาคร">สมุทรสาคร </option>
                                <option value="สมุทรปราการ">สมุทรปราการ </option>
                                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                <option value="สระแก้ว">สระแก้ว </option>
                                <option value="สระบุรี">สระบุรี </option>
                                <option value="สิงห์บุรี">สิงห์บุรี </option>
                                <option value="สุโขทัย">สุโขทัย </option>
                                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                <option value="สุรินทร์">สุรินทร์ </option>
                                <option value="สตูล">สตูล </option>
                                <option value="หนองคาย">หนองคาย </option>
                                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                <option value="อุดรธานี">อุดรธานี </option>
                                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                <option value="อุทัยธานี">อุทัยธานี </option>
                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                <option value="อ่างทอง">อ่างทอง </option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="density">ความหนาแน่นน้ำมันที่ขน</label>
                            <input type="text" class="form-control" name="density" style="font-size:20px"
                                placeholder="กิโลกรัม/ลูกบาศก์เมตร ที่ 15 ํC">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="gravity">ความถ่วงจำเพาะของน้ำมันที่ขน</label>
                            <input type="text" class="form-control" name="gravity" style="font-size:20px"
                                placeholder="กิโลกรัม/ลูกบาศก์เมตร ที่ 15 ํC">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="volume1">ปริมาตรน้ำมัน (ตามใบกำกับสินค้า)</label>
                            <input style="width:200px;font-size:20px" type="text" class="form-control" name="volume1"
                                placeholder="@86 ํF">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="date_start">วัน/เดือน/ปี ที่เรือออกเดินทาง</label>
                            <input type="date" id="date" name="date_start" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="time_start">เวลา</label><br>
                            <input type="time" id="time" name="time_start" style="font-size:20px">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="date_end">วัน/เดือน/ปี ที่เรือถึงปลายทาง</label>
                            <input type="date" id="date" name="date_end" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="time_end">เวลา</label><br>
                            <input type="time" id="time" name="time_end" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="no_tank">สูบถ่ายจากถังหมายเลข</label>
                            <input type="text" class="form-control" name="no_tank" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="pot">ท่าเรือที่ใช้</label>
                            <select class="form-control" style="height:38px;width:120px;font-size:20px" name="pot">
                                <option value="" selected>เลือกท่าเรือ</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="date_start_pump">วัน/เดือน/ปี ที่เริ่มสูบถ่ายน้ำมัน</label>
                            <input type="date" id="date" name="date_start_pump" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="time_start_pump">เวลา</label><br>
                            <input type="time" id="time" name="time_start_pump" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="date_end_pump">วัน/เดือน/ปี
                                ที่สูบถ่ายน้ำมันแล้วเสร็จ</label>
                            <input type="date" id="date" name="date_end_pump" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="time_end_pump">เวลา</label><br>
                            <input type="time" id="time" name="time_end_pump" style="font-size:20px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="spend_time_pump">เวลาที่ใช้ในการสูบถ่ายน้ำมันทั้งหมด</label><br>
                            <input type="text" id="time" name="spend_time_pump" placeholder="ชั่วโมง/นาที"
                                style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="density_tank">ความหนาแน่นน้ำมันในถัง</label>
                            <input type="text" class="form-control" name="density_tank"
                                placeholder="กิโลกรัม/ลูกบาศก์เมตร ที่ 15 ํC" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="gravity_tank">ความถ่วงจำเพาะของน้ำมันในถัง</label>
                            <input type="text" class="form-control" name="gravity_tank" style="font-size:20px"
                                placeholder=" ํAPI ที่ 68 องศาฟาเรนไฮด์">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="volume2">ปริมาตรน้ำมันสุทธิที่รับเข้าคลังน้ำมัน</label>
                            <input style="width:200px;font-size:20px" type="text" class="form-control" name="volume2"
                                placeholder="@86 ํF">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="brand">ดวงตรากรมสรรพสามิตที่ใช้ผนึกบนเรือ</label>
                            <input type="text" class="form-control" name="brand" style="font-size:20px">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="amount">จำนวน</label>
                            <input type="text" class="form-control" name="amount" placeholder="ดวง"
                                style="font-size:20px">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="id" type="hidden" value="<?= $id ?>">
                    <input name="user" type="hidden" value="<?= $user ?>">
                    <input name="db" type="hidden" value="<?= $name ?>">
                    <button class="btn btn-primary" type="submit" name="save"
                        style="width:150px; height:100; font-size:25px;margin-bottom:-20px">
                        บันทึกข้อมูล
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>