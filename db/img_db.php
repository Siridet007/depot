<?php


session_start();
$db = $_POST['db'];
$id = $_POST['id'];
$user = $_POST['user'];

if ($db == 'susco') {
    require_once '../config/susco_db.php';
} else if ($db == 'bck') {
    require_once '../config/bck_db.php';
} else if ($db == 'pkn') {
    require_once '../config/pkn_db.php';
} else if ($db == 'ptg') {
    require_once '../config/ptg_db.php';
} else if ($db == 'mk') {
    require_once '../config/shell_db.php';
}

// File upload path
$targetDir = "../uploads/";

if (isset($_POST['submit'])) {
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $_POST['no_bill'] . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $name_depot = "";
        $province1 = "";
        $tel = "";
        $no_bill = $_POST['no_bill'];
        $name_ship = "";
        $round = "";
        $type_fuel = "";
        $density = "";
        $volume = "";
        $destination = "";
        $province2 = "";
        $distance = "";
        $date = "";
        $time = "";
        $spend_time = "";
        $no_tank = "";
        $pot = "";
        $brand = "";
        $amount = "";
        $img = $_POST['no_bill'] . $fileName;

        // Allow certain file formats

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                $insert = $conn->prepare("INSERT INTO NM09(name_depot, province1, tel, no_bill, name_ship, round, type_fuel, density, volume, destination, province2, distance, date, time , spend_time, no_tank, pot, brand, amount, img)
                VALUES(:name_depot, :province1, :tel, :no_bill, :name_ship, :round, :type_fuel, :density, :volume, :destination, :province2, :distance, :date, :time , :spend_time, :no_tank, :pot, :brand, :amount, :img)");

                $insert->bindParam(":name_depot", $name_depot);
                $insert->bindParam(":province1", $province1);
                $insert->bindParam(":tel", $tel);
                $insert->bindParam(":no_bill", $no_bill);
                $insert->bindParam(":name_ship", $name_ship);
                $insert->bindParam(":round", $round);
                $insert->bindParam(":type_fuel", $type_fuel);
                $insert->bindParam(":density", $density);
                $insert->bindParam(":volume", $volume);
                $insert->bindParam(":destination", $destination);
                $insert->bindParam(":province2", $province2);
                $insert->bindParam(":distance", $distance);
                $insert->bindParam(":date", $date);
                $insert->bindParam(":time", $time);
                $insert->bindParam(":spend_time", $spend_time);
                $insert->bindParam(":no_tank", $no_tank);
                $insert->bindParam(":pot", $pot);
                $insert->bindParam(":brand", $brand);
                $insert->bindParam(":amount", $amount);
                $insert->bindParam(":img", $img);
                $insert->execute();
                $_SESSION['success'] = "บันทึกเรียบร้อยแล้ว!";
                header("location: ../forms/formimg.php");
                if ($insert) {
                    $_SESSION['success'] = "บันทึกเรียบร้อยแล้ว!";
                    $_SESSION['id'] = $id;
                    $_SESSION['db'] = $db;
                    $_SESSION['user'] = $user;
                    header("location: ../forms/formimg.php");
                } else {
                    $_SESSION['error'] = "อัพโหลดไม่สำเร็จ โปรดลองอีกครั้ง";
                    $_SESSION['id'] = $id;
                    $_SESSION['db'] = $db;
                    $_SESSION['user'] = $user;
                    header("location: ../forms/formimg.php");
                }
            } else {
                $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                $_SESSION['id'] = $id;
                $_SESSION['db'] = $db;
                $_SESSION['user'] = $user;
                header("location: ../forms/formimg.php");
            }
        } else {
            $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
            $_SESSION['id'] = $id;
            $_SESSION['db'] = $db;
            $_SESSION['user'] = $user;
            header("location: ../forms/formimg.php");
        }
    } else {
        $_SESSION['error'] = "Please select a file to upload.";
        $_SESSION['id'] = $id;
        $_SESSION['db'] = $db;
        $_SESSION['user'] = $user;
        header("location: ../forms/formimg.php");
    }
}

?>