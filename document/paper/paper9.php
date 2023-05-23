<?php 
$id = $_POST['id'];
$db = $_POST['db'];

if (($db) == 'susco') {
  require_once '../../config/susco_db.php';
  $sql = $conn->prepare("SELECT * FROM NM09 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'bck') {
  require_once '../../config/bck_db.php';
  $sql = $conn->prepare("SELECT * FROM NM09 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'pkn') {
  require_once '../../config/pkn_db.php';
  $sql = $conn->prepare("SELECT * FROM NM09 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'ptg') {
  require_once '../../config/ptg_db.php';
  $sql = $conn->prepare("SELECT * FROM NM09 WHERE ID = $id");
  $sql->execute();
  $result = $sql->fetchAll();
  foreach($result as $z){

  }
} else if (($db) == 'mk') {
  require_once '../../config/shell_db.php';
  $sql = $conn->prepare("SELECT * FROM NM09 WHERE ID = $id");
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
    <link rel="stylesheet" href="../../css/font-th.css">
    <link rel="icon" type="image/png" href="../../images/Sub-logo.png">
    <title>เอกสาร น.ม. 9</title>
    <style>
        th,
        td,
        tr {
            padding: 3px;
        }
    </style>
</head>

<body onload="window.print()">
    
    <center>
        <table border="0">
            <tr>
                <td align="center">
                    <b>น.ม.9</b>
                </td>
            </tr>
            <tr>
                <td>
                    <b>แบบรายงานการจ่ายน้ำมันภายในประเทศ</b>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <b>(สถานีต้นทาง)</b>
                </td>
            </tr>
        </table>
        
        <table border="0">
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    $a = 'บริษัท ไทยออยล์ จำกัด (มหาชน)';
                    $b = 'ชลบุรี';
                    $c = '(038)359000';
                    ?>
                    <b>ชื่อโรงกลั่นน้ำมัน</b>
                    <?php echo $z['name_depot'] ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <b>จังหวัด</b>
                    <?php echo $z['province1']  ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <b>โทรศัพท์</b>
                    <?php echo $z['tel']  ?>
                </td>
            </tr>
        </table>
        
        <table border="0">
      <tr>
        <td>
         <b> 1.เลขที่เอกสาร(ตามใบกำกับสินค้า)</b>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
          <?php $d = 'เลขที่ B/L 2023-0503' ?>
          <?php echo $z['no_bill'] ?>
        </td>
      </tr>
      <tr>
        <td>
         <b> 2.ชื่อเรือ/เที่ยวที่</b>
        </td>
        <td>
          <?php $e = 'เรือ BIG SEA 106/23-0503 เที่ยวที่ 160' ?>
          <?php echo $z['name_ship'] ?><b>เที่ยวที่</b>
          <?php echo $z['round'] ?>
        </td>
      </tr>
      <tr>
        <td>
         <b> 3.ประเภทน้ำมันที่ขน</b>
        </td>
        <td>
          <?php $f = 'High Speed Diesel' ?>
          <?php echo $z['type_fuel'] ?>
        </td>
      </tr>
      <tr>
        <td>
         <b> 4.ความหนาแน่นน้ำมันที่ขน</b>
        </td>
        <td>
          <?php $g = '0.7942' ?>
          <?php echo $z['density'] ?> <b>15C</b>
        </td>
      </tr>
      <tr>
        <td>
         <b> 5.ปริมาตรน้ำมัน (ตามใบกำกับสินค้า)B/L</b>
        </td>
        <td>
          <?php $h = '5007303' ?>
          <?php echo $z['volume'] ?><b> ลิตร@86C</b>
        </td>
      </tr>
      <tr>
        <td>
         <b> 6.สถานีปลายทาง</b>
        </td>
        <td>
          <?php $i = 'เชฟร่อน คลังช่องนนทรี' ?>
          <?php echo $z['destination'] ?>
         <b> จังหวัด</b>
          <?php $j = 'กทม.' ?>
          <?php echo $z['province2'] ?>
        </td>
      </tr>
      <tr>
        <td>
         <b> 7.ระยะทาง</b>
        </td>
        <td>
          <?php $k = '60' ?>
          <?php echo $z['distance'] ?><b> ไมล์</b>
        </td>
      </tr>
      <tr>
        <td>
         <b> 8.วัน/เดือน/ปี ที่เรือออกเดินทาง</b>
        </td>
        <td>
          <?php $l = '13 กุมภาพันธ์ 2566' ?>
          <?php echo $z['date'] ?>
        </td>
      </tr>
      <tr>
        <td>
         <b> 9.เวลา</b>
        </td>
        <td>
          <?php $m = '05.00' ?>
          <?php echo $z['time'] ?> <b>นาฬิกา</b>
        </td>
      </tr>
      <tr>
        <td>
         <b> 10.เวลาที่คาดว่าจะใช้เดินทาง</b>
        </td>
        <td>
          <?php $n = '6' ?>
          <?php echo $z['spend_time'] ?> <b>ชั่วโมง</b>
        </td>
      </tr>
      <tr>
        <td>
         <b> 11.สูบถ่ายจากถังเก็บหมายเลข</b>
        </td>
        <td>
          <?php $o = 'T-3039' ?>
          <?php $p = '4' ?>
          <?php echo $z['no_tank'] ?><b> นาฬิกา ท่าเรือที่ใช้</b>
          <?php echo $z['pot'] ?>
        </td>
      </tr>
      <tr>
        <td>
        <b> 12.ดวงตรากรมสรรพสามิตที่ใช้ผนึกบนเรือ</b>
        </td>
        <td>
          <?php $q = 'Hสส 590069-590074' ?>
         <b> ชีลหมายเลข</b>
          <?php echo $z['brand'] ?>
        </td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
        <td>
          <?php $r = '6' ?>
         <b> จำนวน</b>
          <?php echo $z['amount'] ?><b> ดวง</b>
        </td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
        <td>

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
          <?php $t = 'นายช่างเทคนิค' ?>
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
                    ให้จัดทำรายงานจำนวน 2 ฉบับ คือ
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                </td>
                <td>
                    ได้ทำการตรวจวัดสาร MK ได้........
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
                    - กำกับไปพร้อมเรือบรรทุกน้ำมัน 1 ฉบับ
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    - เก็บไว้ที่โรงกลั่น/ห้องปฏิบัติการสรรพสามิตต้นทาง 1 ฉบับ
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    - แจ้งให้ห้องปฏิบัติการสรรพสามิตปลายทาง และศูนย์ปฏิบัติการสรรพสามิต (OPERATION ROOM)
                    ทราบทางโทรสารทันที
                </td>
            </tr>
        </table>
        
        <table border="0">
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    เลขที่คุมเอกสาร......./...........
                </td>
            </tr>
        </table>
    </center>

</body>

</html>