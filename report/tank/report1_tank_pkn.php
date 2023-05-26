<?php
    require_once '../../config/pkn_db.php';
    $month = $_POST['month'];
    $year = $_POST['year'];
    $db = $_POST['id'];
    
    $sqle = $conn->prepare("SELECT * FROM vTank_MonthReport_V2 WHERE MONTH = $month AND YEAR = $year");
    $sqle->execute();
    $resulte = $sqle->fetchAll();
    
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
            <br>
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
                        <td><b>ประจำวัน</b></td>
                        <td><?php echo $month ?></td>
                        <td></td>
                        <td><b>พ.ศ.</b> <?php echo $year ?></td>
                    </tr>
                </table>
            </center>
            
            <center>
                <table border="1" style="width:950px ;margin:10px ">
                    <thead>
                        <tr align="center">
                            <td rowspan="2"><b>เวลา</b></td>
                            <td colspan="5"><b>Tank12</b></td>
                            <td colspan="5"><b>Tank15</b></td>
                            <td colspan="5"><b>Tank16</b></td>
                            <td colspan="5"><b>Tank17</b></td>
                        </tr>
                        <tr align="center">
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Max (ลิตร)</b></td>
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Min (ลิตร)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Max (มม.)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Min (มม.)</b></td>
                            <td><font size="2"><b>อุณหภูมิ<br> ( ํC)</b></td>
                            
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Max (ลิตร</b>)</td>
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Min (ลิตร)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Max (มม.)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Min (มม.)</b></td>
                            <td><font size="2"><b>อุณหภูมิ<br> ( ํC)</b></td>
                            
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Max (ลิตร)</b></td>
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Min (ลิตร)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Max (มม.)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Min (มม.)</b></td>
                            <td><font size="2"><b>อุณหภูมิ<br> ( ํC)</td>

                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Max (ลิตร)</b></td>
                            <td><font size="2"><b>ปริมาณน้ำมัน<br>Min (ลิตร)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Max (มม.)</b></td>
                            <td><font size="2"><b>ระดับน้ำมัน<br>Min (มม.)</b></td>
                            <td><font size="2"><b>อุณหภูมิ<br> ( ํC)</b></td>
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
                           <?php // $percent = ((($z['TANK_RECIVE_VOL'] - $z['METER_VOLUME']) / $z['TANK_RECIVE_VOL']) * 100) ?>
                           
                        <tr align="center">                           
                            <td><font size="3"><?php echo $z['DATE'] ?> </td>

                            <td><font size="3"><?php echo $z['TK12_Total_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK12_Total_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK12_Level_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK12_Level_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK12_Temp'] ?> </td>

                            <td><font size="3"><?php echo $z['TK15_Total_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK15_Total_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK15_Level_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK15_Level_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK15_Temp'] ?> </td>

                            <td><font size="3"><?php echo $z['TK16_Total_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK16_Total_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK16_Level_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK16_Level_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK16_Temp'] ?> </td>

                            <td><font size="3"><?php echo $z['TK17_Total_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK17_Total_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK17_Level_Max'] ?> </td>
                            <td><font size="3"><?php echo $z['TK17_Level_Min'] ?> </td>
                            <td><font size="3"><?php echo $z['TK17_Temp'] ?> </td>
                            
                        </tr>
                        <?php } ?>                   
                        <?php for($i=0;$i<$aa;$i++){ ?>
                        <tr align="center">                           
                            <td><font size="3">&nbsp; </td>

                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>

                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>

                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>

                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
                            <td><font size="3"> </td>
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
                    .........................................ร่าง</P>
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