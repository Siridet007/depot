<?php
$id = $_POST['id'];
$db = $_POST['db'];

if (($db) == 'susco') {
  require_once '../../config/susco_db.php';
  $sql = $conn->prepare("SELECT * FROM NM10_1 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'bck') {
  require_once '../../config/bck_db.php';
  $sql = $conn->prepare("SELECT * FROM NM10_1 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'pkn') {
  require_once '../../config/pkn_db.php';
  $sql = $conn->prepare("SELECT * FROM NM10_1 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'ptg') {
  require_once '../../config/ptg_db.php';
  $sql = $conn->prepare("SELECT * FROM NM10_1 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'mk') {
  require_once '../../config/shell_db.php';
  $sql = $conn->prepare("SELECT * FROM NM10_1 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/font-th10.css">
    <link rel="icon" type="image/png" href="../../images/Sub-logo.png">
    <title>เอกสาร น.ม. 10/1</title>
    <style>
        table th,
        td {
            padding: 1px;
            border: 1px solid white;
            border-collapse: collapse;
        }
    </style>
</head>

<body onload="window.print()">

    <div class="container">
        <center>
            <table border="0">
                <tr>
                    <td>
                        <b>เลขที่เอกสารอ้างอิง......</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <b>น.ม.10/1</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td align="center">
                    <b>แบบรายงานการจ่ายน้ำมันจากต่างประเทศ</b>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td align="center">
                    <b>(สถานีปลายทาง)</b>
                    </td>
                    <td></td>
                </tr>
            </table>

            <table border="0">
                <tr>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <?php
                        $a = 'บริษัท ไทยออยล์ จำกัด (มหาชน)';
                        $b = 'ชลบุรี';
                        $c = '(038)359000';
                        ?>
                        <b>ชื่อคลัง</b>
                        <?php echo $z['name_depot'] ?>
                    </td>
                    <td>
                    <b>จังหวัด</b>
                        <?php echo $z['province1'] ?>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <b>โทรศัพท์</b>
                        <?php echo $z['tel'] ?>
                    </td>
                    <td></td>
                </tr>
            </table>

            <table border="1" style="solid black">
                <tr>
                    <td>
                    <b>1.เลขที่เอกสาร (ตามแบบ กศก.99/1)</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <?php //echo $z['no_bill99'] ?>
                        ................................................................................
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>2.ชื่อเรือที่นำเข้า</b>
                    </td>
                    <td>
                    <?php //echo $z['ship_import'] ?>
                        ................................................................................
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>3.ประเทศต้นทาง</b>
                    </td>
                    <td>
                    <?php //echo $z['country'] ?>
                        ................................................................................
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>4.ประเภทน้ำมันที่นำเข้า (ตามแบบ กศก.99/1)</b>
                    </td>
                    <td>
                    <?php //echo $z['no_bill99'] ?>
                        ................................................................................
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>
                    <b>1.ชื่อเรือ/เที่ยวที่</b>
                    </td>
                    <td>
                        <?php $e = 'เรือ BIG SEA 106/23-0503 เที่ยวที่ 160' ?>
                        <?php echo $z['name_ship'] ?>
                        <b>เที่ยวที่</b> 
                        <?php echo $z['round'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>2.ประเภทน้ำมันที่ขน</b>
                    </td>
                    <td>
                        <?php $f = 'High Speed Diesel' ?>
                        <?php echo $z['type_fuel'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>3.ความหนาแน่นน้ำมันที่ขน หรือ</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                    </td>
                    <td>
                        <?php $i = '0.7942' ?>
                        <?php echo $z['density'] ?> <b>กิโลกรัม/ลูกบาศก์เมตร ที่ 15 องศาเซลเซียล</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;&nbsp;
                        <b>ความถ่วงจำเพาะของน้ำมันที่ขน</b>
                    </td>
                    <td>
                        <?php $j = '-' ?>
                        <?php echo $z['gravity'] ?> <b>ํAPI ที่ 68 องศาฟาเรนไฮด์</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>4.ปริมาตรน้ำมัน (ตามใบกำกับสินค้า)</b>
                    </td>
                    <td>
                        <?php $k = '5007303' ?>
                        <?php echo $z['volume1'] ?> <b>ลิตรที่ 86 องศาฟาเรนไฮด์</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>5.วัน/เดือน/ปี ที่เรือออกเดินทาง</b>
                    </td>
                    <td>
                        <?php $l = '13 กุมภาพันธ์ 2566' ?>
                        <?php echo $z['date_start'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>6.เวลา</b>
                    </td>
                    <td>
                        <?php $m = '05.00' ?>
                        <?php echo $z['time_start'] ?> <b>นาฬิกา</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>7.วัน/เดือน/ปี ที่เรือถีงคลังปลายทาง</b>
                    </td>
                    <td>
                        <?php $n = '13 กุมภาพันธ์ 2566' ?>
                        <?php echo $z['date_end'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>8.เวลา</b>
                    </td>
                    <td>
                        <?php $m = '09.55' ?>
                        <?php echo $z['time_end'] ?> <b>นาฬิกา</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>9.สูบถ่ายจากถังเก็บหมายเลข</b>
                    </td>
                    <td>
                        <?php $o = 'TH-22' ?>
                        <?php $p = '2' ?>
                        <?php echo $z['no_tank'] ?> <b>ท่าเรือที่ใช้</b>
                        <?php echo $z['pot'] ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    <b>10.วัน/เดือน/ปี ที่เริ่มสูบถ่ายน้ำมัน</b>
                    </td>
                    <td>
                        <?php $q = '13 กุมภาพันธ์ 2566' ?>
                        <?php echo $z['date_start_pump'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>11.เวลา</b>
                    </td>
                    <td>
                        <?php $r = '12.55' ?>
                        <?php echo $z['time_start_pump'] ?> <b>นาฬิกา</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>12.วัน/เดือน/ปี ที่สูบถ่ายน้ำมันแล้วเสร็จ</b>
                    </td>
                    <td>
                        <?php $s = '13 กุมภาพันธ์ 2566' ?>
                        <?php echo $z['date_end_pump'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>13.เวลา</b>
                    </td>
                    <td>
                        <?php $t = '21.55' ?>
                        <?php echo $z['time_end_pump'] ?> <b>นาฬิกา</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>14.เวลาที่ใช้ในการสูบถ่ายน้ำมันทั้งหมด</b>
                    </td>
                    <td>
                        <?php $u = '9/35' ?>
                        <?php echo $z['spend_time_pump'] ?> <b>ชั่วโมง/นาที</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>15.ความหนาแน่นน้ำมันในถัง หรือ</b>
                    </td>
                    <td>
                        <?php $v = '0.7942' ?>
                        <?php echo $z['density_tank'] ?> <b>กิโลกรัม/ลูกบาศก์เมตร ที่ 15 องศาเซลเซียล</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <b>ความถ่วงจำเพาะของน้ำมันในถัง</b>
                    </td>
                    <td>
                        <?php $w = '-' ?>
                        <?php echo $z['gravity_tank'] ?> <b>ํAPI ที่ 68 องศาฟาเรนไฮด์</b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>16.ปริมาตรน้ำมันสุทธิที่รับเข้าคลังน้ำมัน</b>
                    </td>
                    <td>
                        <?php $x = '5007303' ?>
                        <?php echo $z['volume2'] ?> <b>ลิตรที่ 86 องศาฟาเรนไฮด์</b>
                    </td>
                </tr>

                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        ...........................................เจ้าพนักงานสรรพสามิต
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        (.........................................)
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        ตำแหน่ง..................................
                    </td>
                </tr>
            </table>

            <table border="0">
                <tr>
                    <td>
                    <b>หมายเหตุ</b> &nbsp;&nbsp;
                    </td>
                    <td>
                        ให้จัดทำรายงานจำนวน 1 ฉบับ เก็บไว้ที่ห้องปฏิบัติการสรรพสามิตปลายทาง
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        - แจ้งให้ห้องปฏิบัติการกรมสรรพสามิต (OPERATION ROOM) ทราบทางโทรสารทันที
                    </td>
                </tr>
            </table>
        </center>
    </div>

</body>

</html>