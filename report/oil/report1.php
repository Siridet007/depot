<?php
    require_once '../../config/exd_db.php';
    $month = $_POST['month'];
    $year = $_POST['year'];
if (($_POST['id']) == 'susco') {
    $sqle = $conne->prepare("SELECT * FROM vBatch_Web WHERE D_ID = 4 AND START_MONTH = $month AND START_YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
    //print_r($resulte);
} else if (($_POST['id']) == 'bck') {
    $sqle = $conne->prepare("SELECT * FROM vBatch_Web WHERE D_ID = 5 AND START_MONTH = $month AND START_YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
    //print_r($resulte);
} else if (($_POST['id']) == 'pkn') {
    $sqle = $conne->prepare("SELECT * FROM vBatch_Web WHERE D_ID = 3 AND START_MONTH = $month AND START_YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
    //print_r($resulte);
} else if (($_POST['id']) == 'ptg') {
    $sqle = $conne->prepare("SELECT * FROM vBatch_Web WHERE D_ID = 2 AND START_MONTH = $month AND START_YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
    //print_r($resulte);
} else if (($_POST['id']) == 'mk') {
    $sqle = $conne->prepare("SELECT * FROM vBatch_Web WHERE D_ID = 1 AND START_MONTH = $month AND START_YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
   // print_r($resulte);
}
    
    if(($month) == '01'){
        $month = 'มกราคม';
    }else if(($month) == '02'){
        $month = 'กุมภาพันธ์';
    }else if(($month) == '03'){
        $month = 'มีนาคม';
    }else if(($month) == '04'){
        $month = 'เมษายน';
    }else if(($month) == '05'){
        $month = 'พฤษภาคม';
    }else if(($month) == '06'){
        $month = 'มิถุนายน';
    }else if(($month) == '07'){
        $month = 'กรกฎาคม';
    }else if(($month) == '08'){
        $month = 'สิงหาคม';
    }else if(($month) == '09'){
        $month = 'กันยายน';
    }else if(($month) == '10'){
        $month = 'ตุลาคม';
    }else if(($month) == '11'){
        $month = 'พฤศจิกายน';
    }else if(($month) == '12'){
        $month = 'ธันวาคม';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/font-th.css">
    <link rel="icon" type="image/png" href="../../images/Sub-logo.png">

    <title>รายงานการรับน้ำมัน</title>
    <style>
        
        @media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
    .card{
        border: 0px;
    }
    </style>
</head>
<body>
<div class="container">
        <br>
        <div class="card">
            <div class="card-body">
            <button style="float:right;font-size:20px" id="hid" onclick="window.print();" class="btn btn-primary" > พิมพ์ </button>
                <center>
                    <h2 class="card-title"><b> รายงานการรับ-จ่ายน้ำมันชายฝั่ง (น้ำมันดีเซล)</b></h2>
                </center>
            </div>
            <center>
                <table border="0" style="width:950px">
                    <tr>
                        <td width="10%">&nbsp;&nbsp; <b>คลังน้ำมัน</b></td>
                        <td width="52%">
                        <?php if(($_POST['id']) == 'susco') { ?>
                                คลังน้ำมันราษฎร์บูรณะ บริษัท ซัสโก้ จำกัด (มหาชน)
                            <?php } ?>
                            <?php if(($_POST['id']) == 'bck') { ?>
                                คลังน้ำมันปิโตรเลียมบางจาก บริษัท ปตท.น้ำมันและค้าปลีก จำกัด (มหาชน)
                            <?php } ?>
                            <?php if(($_POST['id']) == 'pkn') { ?>
                                คลังน้ำมัน ปตท. พระโขนง บริษัท ปตท.น้ำมันและค้าปลีก จำกัด (มหาชน)
                            <?php } ?>
                            <?php if(($_POST['id']) == 'ptg') { ?>
                                คลังน้ำมันพีทีจีแม่กลอง บริษัท พีทีจี เอ็นเนอยี จำกัด (มหาชน)
                            <?php } ?>
                            <?php if(($_POST['id']) == 'mk') { ?>
                                คลังน้ำมันเชลล์แม่กลอง บริษัท เชลล์แห่งประเทศไทย จำกัด
                            <?php } ?>
                        </td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td><?php if(($_POST['id']) == 'susco'){ ?>
                            สรรพสามิตกรุงเทพฯพื้นที่1
                        <?php } ?>
                        <?php if(($_POST['id']) == 'bkc'){ ?>
                            สรรพสามิตกรุงเทพฯพื้นที่3
                       <?php  } ?>
                       <?php if(($_POST['id']) == 'pkn'){ ?>
                            สรรพสามิตกรุงเทพฯพื้นที่3
                       <?php  } ?>
                       <?php if(($_POST['id']) == 'ptg'){ ?>
                            สรรพสามิตพื้นที่สมุทรสงคราม
                       <?php  } ?>
                       <?php if(($_POST['id']) == 'mk'){ ?>
                            สรรพสามิตพื้นที่สมุทรสงคราม
                       <?php  } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>ประจำเดือน</b></td>
                        <td><?php echo $month ?></td>
                        <td></td>
                        <td><b>พ.ศ.</b> <?php echo $year ?></td>
                    </tr>
                </table>
            </center>
            <center>
                <table border="1" style="width:950px;">
                    <thead>
                        <tr align="center">
                            <td rowspan="2" width="6%"><b>ลำดับที่</b></td>
                            <td rowspan="2" width="6%"><b>ครั้งที่</b></td>
                            <td rowspan="2" width="8.5%"><b>ถังรับน้ำมัน</b></td>
                            <td rowspan="2" width="15.5%"><b>วันที่รับน้ำมัน</b></td>
                            <td rowspan="2" width="15%"><b>วันที่รับน้ำมันเสร็จ</b></td>
                            <td colspan="4" ><b>ปริมาณตามการวัดระดับ</b></td>
                        </tr>
                        <tr align="center">
                            <td width="11%"><b>ปริมาณวัดที่ถัง<br>(ลิตร)</b></td>
                            <td width="13%"><b>ปริมาณวัดที่มิเตอร์<br>(ลิตร)</b></td>
                            <td width="8%"><b>ผลต่าง<br> (ลิตร)</b></td>
                            <td width="8%"><b>ร้อยละ<br> (%)</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        //print_r($resulte);
                        //exit();
                        //$arr = array();
                        //array_merge($arr,$resulte); 
                        //$resulte = $arr;
                        
                        $resulte = array_slice($resulte,0,30);
                        $aa = count($resulte) <=30 ? 30-count($resulte): 0;
                        $bb = count($resulte)+1;
                        foreach($resulte as $key => $z){ 
                           // print_r($z);
                            //echo '<br>';?>
                          <?php $percent = ((($z['TANK_RECIVE_VOL'] - $z['METER_VOLUME']) / $z['TANK_RECIVE_VOL']) * 100) ?>
                           
                        <tr align="center">
                            <td><?php echo $key+1 ?></td>                            
                            <td><?php echo $z['BATCH_ID'] ?> </td>
                            <td><?php echo $z['TANK'] ?> </td>
                            <td><?php echo $z['START_DATE'] ?> </td>
                            <td><?php echo $z['END_DATE'] ?> </td>
                            <td><?php echo $z['TANK_RECIVE_VOL'] ?> </td>
                            <td><?php echo $z['METER_VOLUME'] ?> </td>
                            <td><?php echo $z['DIFF_TANK_METER'] ?> </td>
                            <td><?php echo "" . number_format($percent, 4); ?> </td>
                        </tr>
                        <?php } ?>                   
                        <?php for($i=0;$i<$aa;$i++){ ?>
                        <tr align="center">
                            <td> <?php echo $bb++; ?></td>                            
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                      <?php  } ?>
                        
                    </tbody>
                </table>

            </center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
            <table border="0" style="width:950px;">
                <tr>
                    <td>
                    <p>หมายเหตุ..............................................................................................................
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                    </td>
                    <td>
                    .........................................ร่าง</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>..............................................................................................................................
                    </td>
                    <td></td>
                    <td>......................................พิมพ์</p></td>
                </tr>
                <tr>
                    <td>
                        <p>..............................................................................................................................
                    </td>
                    <td></td>
                    <td>......................................ตรวจ</p></td>
                </tr>
            </table>
            </center>
        </div>
    </div>
</body>
</html>