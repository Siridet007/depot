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
    $no_bill = $_POST['no_bill'];
    $name_ship = $_POST['name_ship'];
    $round = $_POST['round'];
    $type_fuel = $_POST['type_fuel'];
    $density = $_POST['density'];
    $volume = $_POST['volume'];
    $destination = $_POST['destination'];
    $province2 = $_POST['province2'];
    $distance = $_POST['distance'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $spend_time = $_POST['spend_time'];
    $no_tank = $_POST['no_tank'];
    $pot = $_POST['pot'];
    $brand = $_POST['brand'];
    $amount = $_POST['amount'];
    $img = $_POST['no_bill'] . '.png';
    if (empty($name_depot)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อคลัง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($province1)) {
        $_SESSION['error'] = 'กรุณาเลือกจังหวัด';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($tel)) {
        $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($no_bill)) {
        $_SESSION['error'] = 'กรุณากรอกเลขที่เอกสาร';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($name_ship)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อเรือ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($round)) {
        $_SESSION['error'] = 'กรุณากรอกเที่ยวที่';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($type_fuel)) {
        $_SESSION['error'] = 'กรุณาเลือกประเภทน้ำมันที่ขน';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($density)) {
        $_SESSION['error'] = 'กรุณากรอกความหนาแน่น';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($volume)) {
        $_SESSION['error'] = 'กรุณากรอกปริมาตร';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($destination)) {
        $_SESSION['error'] = 'กรุณาเลือกปลายทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($province2)) {
        $_SESSION['error'] = 'กรุณาเลือกจังหวัด';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($distance)) {
        $_SESSION['error'] = 'กรุณากรอกระยะทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($date)) {
        $_SESSION['error'] = 'กรุณาเลือกวันที่';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($time)) {
        $_SESSION['error'] = 'กรุณาเลือกเวลา';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($spend_time)) {
        $_SESSION['error'] = 'กรุณากรอกเวลาที่คาดว่าจะใช้เดินทาง';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($no_tank)) {
        $_SESSION['error'] = 'กรุณากรอกสูบถ่ายจากถังหมายเลข';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($pot)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อท่าเรือที่ใช้';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($brand)) {
        $_SESSION['error'] = 'กรุณากรอกดวงตรากรมสรรพสามิตที่ใช้ผนึกบนเรือ';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else if (empty($amount)) {
        $_SESSION['error'] = 'กรุณากรอกจำนวน';
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/form9.php");
    } else {
        try {
            if (!isset($_SESSION['error'])) {
                $stmt = $conn->prepare("INSERT INTO NM09(name_depot, province1, tel, no_bill, name_ship, round, type_fuel, density, volume, destination, province2, distance, date, time , spend_time, no_tank, pot, brand, amount, img)
                                            VALUES(:name_depot, :province1, :tel, :no_bill, :name_ship, :round, :type_fuel, :density, :volume, :destination, :province2, :distance, :date, :time , :spend_time, :no_tank, :pot, :brand, :amount, :img)");

                $stmt->bindParam(":name_depot", $name_depot);
                $stmt->bindParam(":province1", $province1);
                $stmt->bindParam(":tel", $tel);
                $stmt->bindParam(":no_bill", $no_bill);
                $stmt->bindParam(":name_ship", $name_ship);
                $stmt->bindParam(":round", $round);
                $stmt->bindParam(":type_fuel", $type_fuel);
                $stmt->bindParam(":density", $density);
                $stmt->bindParam(":volume", $volume);
                $stmt->bindParam(":destination", $destination);
                $stmt->bindParam(":province2", $province2);
                $stmt->bindParam(":distance", $distance);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":time", $time);
                $stmt->bindParam(":spend_time", $spend_time);
                $stmt->bindParam(":no_tank", $no_tank);
                $stmt->bindParam(":pot", $pot);
                $stmt->bindParam(":brand", $brand);
                $stmt->bindParam(":amount", $amount);
                $stmt->bindParam(":img", $img);
                $stmt->execute();
                $_SESSION['success'] = "บันทึกเรียบร้อยแล้ว!";
                $_SESSION['id'] = $id;
                $_SESSION['db'] = $db;
                $_SESSION['user'] = $user;
                header("location: ../forms/form9.php");
            } else {
                $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                $_SESSION['id'] = $id;
                $_SESSION['db'] = $db;
                $_SESSION['user'] = $user;
                header("location: ../forms/form9.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}
?>