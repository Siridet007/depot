<?php

session_start();
$id = $_POST['id'];
$db = $_POST['db'];
$user = $_POST['user'];

if ($_POST['db'] == 'susco') {
    require_once '../config/susco_db.php';
}else if($_POST['db'] == 'bck'){
    require_once '../config/bck_db.php';
}else if($_POST['db'] == 'pkn'){
    require_once '../config/pkn_db.php';
}else if($_POST['db'] == 'ptg'){
    require_once '../config/ptg_db.php';
}else if($_POST['db'] == 'mk'){
    require_once '../config/shell_db.php';
}

if (isset($_POST['save'])) {
    $name_depot = $_POST['name_depot'];
    $province1 = $_POST['province1'];
    $tel = $_POST['tel'];
    $no_bill99 = $_POST['no_bill99'];
    $ship_import = $_POST['ship_import'];
    $country = $_POST['country'];
    $type99 = $_POST['type99'];
    $name_ship = $_POST['name_ship'];
    $round = $_POST['round'];
    $type_fuel = $_POST['type_fuel'];
    $density = $_POST['density'];
    $gravity = $_POST['gravity'];
    $volume1 = $_POST['volume1'];
    $date_start = $_POST['date_start'];
    $time_start = $_POST['time_start'];
    $date_end = $_POST['date_end'];
    $time_end = $_POST['time_end'];
    $no_tank = $_POST['no_tank'];
    $pot = $_POST['pot'];
    $date_start_pump = $_POST['date_start_pump'];
    $time_start_pump = $_POST['time_start_pump'];
    $date_end_pump = $_POST['date_end_pump'];
    $time_end_pump = $_POST['time_end_pump'];
    $spend_time_pump = $_POST['spend_time_pump'];
    $density_tank = $_POST['density_tank'];
    $gravity_tank = $_POST['gravity_tank'];
    $volume2 = $_POST['volume2'];
    $no_refer = $_POST['no_refer'];
    if (empty($name_depot)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อคลัง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($province1)) {
        $_SESSION['error'] = 'กรุณาเลือกจังหวัด';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($tel)) {
        $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($no_bill99)) {
        $_SESSION['error'] = 'กรุณากรอกเลขที่เอกสาร';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($ship_import)) {
        $_SESSION['error'] = 'กรุณากรอกเรือที่นำเข้า';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($country)) {
        $_SESSION['error'] = 'กรุณาเลือกประเทศต้นทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($type99)) {
        $_SESSION['error'] = 'กรุณาเลือกน้ำมันที่นำเข้า';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($name_ship)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อเรือ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($round)) {
        $_SESSION['error'] = 'กรุณากรอกเที่ยวที่';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($type_fuel)) {
        $_SESSION['error'] = 'กรุณาเลือกประเภทน้ำมันที่ขน';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($density)) {
        $_SESSION['error'] = 'กรุณากรอกความหนาแน่น';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($gravity)) {
        $_SESSION['error'] = 'กรุณากรอกความถ่วงจำเพาะ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($volume1)) {
        $_SESSION['error'] = 'กรุณากรอกปริมาตร';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($date_start)) {
        $_SESSION['error'] = 'กรุณาเลือกวัน/เดือน/ปี ที่เรือออกเดินทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($time_start)) {
        $_SESSION['error'] = 'กรุณาเลือกเวลา';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($date_end)) {
        $_SESSION['error'] = 'กรุณาเลือกวัน/เดือน/ปี ที่เรือถึงปลายทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($time_end)) {
        $_SESSION['error'] = 'กรุณาเลือกเวลา';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($no_tank)) {
        $_SESSION['error'] = 'กรุณากรอกสูบถ่ายจากถังหมายเลข';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($pot)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อท่าเรือที่ใช้';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($date_start_pump)) {
        $_SESSION['error'] = 'กรุณาเลือกวัน/เดือน/ปี ที่เรือเริ่มสูบถ่ายน้ำมัน';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($time_start_pump)) {
        $_SESSION['error'] = 'กรุณาเลือกเวลา';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($date_end_pump)) {
        $_SESSION['error'] = 'กรุณาเลือกวัน/เดือน/ปี ที่เรือสูบน้ำมันแล้วเสร็จ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($time_end_pump)) {
        $_SESSION['error'] = 'กรุณาเลือกเวลา';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($spend_time_pump)) {
        $_SESSION['error'] = 'เวลาที่ใช้ในการสูบถ่ายน้ำมันทั้งหมด';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($density_tank)) {
        $_SESSION['error'] = 'กรุณากรอกความหนาแน่นในถัง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($gravity_tank)) {
        $_SESSION['error'] = 'กรุณากรอกความถ่วงจำเพาะในถัง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    } else if (empty($volume2)) {
        $_SESSION['error'] = 'กรุณากรอกปริมาตรน้ำมันสุทธิ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    }/* else if (empty($no_refer)) {
        $_SESSION['error'] = 'กรุณาเลขที่เอกสารอ้างอิง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form101.php");
    }*/ else {
        try {
            if (!isset($_SESSION['error'])) {
                $stmt = $conn->prepare("INSERT INTO NM10_1(name_depot, province1, tel, no_bill99, ship_import, country, type99, name_ship, round, type_fuel, density, gravity, volume1, date_start, time_start, date_end, time_end, no_tank, pot, date_start_pump, time_start_pump, date_end_pump, time_end_pump, spend_time_pump, density_tank, gravity_tank, volume2, no_refer)
                                            VALUES(:name_depot, :province1, :tel, :no_bill99, :ship_import, :country, :type99, :name_ship, :round, :type_fuel, :density, :gravity, :volume1, :date_start, :time_start, :date_end, :time_end, :no_tank, :pot, :date_start_pump, :time_start_pump, :date_end_pump, :time_end_pump, :spend_time_pump, :density_tank, :gravity_tank, :volume2, :no_refer)");

                $stmt->bindParam(":name_depot", $name_depot);
                $stmt->bindParam(":province1", $province1);
                $stmt->bindParam(":tel", $tel);
                $stmt->bindParam(":no_bill99", $no_bill99);
                $stmt->bindParam(":ship_import", $ship_import);
                $stmt->bindParam(":country", $country);
                $stmt->bindParam(":type99", $type99);
                $stmt->bindParam(":name_ship", $name_ship);
                $stmt->bindParam(":round", $round);
                $stmt->bindParam(":type_fuel", $type_fuel);
                $stmt->bindParam(":density", $density);
                $stmt->bindParam(":gravity", $gravity);
                $stmt->bindParam(":volume1", $volume1);
                $stmt->bindParam(":date_start", $date_start);
                $stmt->bindParam(":time_start", $time_start);
                $stmt->bindParam(":date_end", $date_end);
                $stmt->bindParam(":time_end", $time_end);
                $stmt->bindParam(":no_tank", $no_tank);
                $stmt->bindParam(":pot", $pot);
                $stmt->bindParam(":date_start_pump", $date_start_pump);
                $stmt->bindParam(":time_start_pump", $time_start_pump);
                $stmt->bindParam(":date_end_pump", $date_end_pump);
                $stmt->bindParam(":time_end_pump", $time_end_pump);
                $stmt->bindParam(":spend_time_pump", $spend_time_pump);
                $stmt->bindParam(":density_tank", $density_tank);
                $stmt->bindParam(":gravity_tank", $gravity_tank);
                $stmt->bindParam(":volume2", $volume2);
                $stmt->bindParam(":no_refer", $no_refer);
                $stmt->execute();
                $_SESSION['success'] = "บันทึกเรียบร้อยแล้ว!";
                $_SESSION['id'] = $id;
                $_SESSION['db'] = $db;
                $_SESSION['user'] = $user;
                header("location: ../forms/form101.php");
            } else {
                $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                $_SESSION['id'] = $id;
                $_SESSION['db'] = $db;
                $_SESSION['user'] = $user;
                header("location: ../forms/form101.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }


}

?>