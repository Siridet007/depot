<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../config/db.php';

if (isset($_POST['signin'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (empty($user_name)) {
        $_SESSION['error'] = 'กรุณากรอกอีเมล';
        header("location: ../loginform.php");
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: ../loginform.php");
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 3) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 3 ถึง 20 ตัวอักษร';
        header("location: ../loginform.php");

    } else {
        try {

            $check_data = $conn->prepare("SELECT * FROM users WHERE user_name = :user_name");
            $check_data->bindParam(":user_name", $user_name);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);
            echo $row['firstname'];
            if (is_array($row)) {

                if ($user_name == $row['user_name']) {
                    if ($password == $row['password']) {
                        if ($row['urole'] == 'admin') {
                            $_SESSION['admin_login'] = $row['id'];
                            header("location: ../maps/map.php");
                        } else if ($row['urole'] == 'user1') {
                            $_SESSION['user1_login'] = $row['id'];
                            header("location: ../maps/map.php");
                        } else if ($row['urole'] == 'user2') {
                            $_SESSION['user2_login'] = $row['id'];
                            header("location: ../maps/map.php");
                        } else {
                            $_SESSION['user3_login'] = $row['id'];
                            header("location: ../maps/map.php");
                        }
                    } else {
                        $_SESSION['error'] = 'รหัสผ่านผิด';
                        header("location: ../loginform.php");
                    }

                } else {
                    $_SESSION['error'] = 'ชื่อผู้ใช้ผิด';
                    header("location: ../loginform.php");
                }

            } else {
                $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                header("location: ../loginform.php");
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>