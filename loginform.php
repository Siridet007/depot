<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-th.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="images/Sub-logo.png">
    <title>คลังน้ำมัน</title>
</head>
<style>
    
</style>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <br>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="images/Sub-logo.png" class="image" style="height:350px;width:650px">
                        </div>
                        <center>
                            <div class="card text-white bg-primary mb-3">
                                <h2>ระบบควบคุมการรับ-จ่ายน้ำมันชายฝั่ง</h2>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <form action="db/signin_db.php" method="post">
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
                            <center>
                            <h3 class="mb-0 mr-4 mt-2">ลงชื่อเข้าใช้</h3>
                            </center>
                            <br><br>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h4>ชื่อผู้ใช้งาน</h4>
                                </label>
                                <input type="text" class="form-control" name="user_name" style="font-size:20px">
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h4>รหัสผ่าน</h4>
                                </label>
                                <input type="password" class="form-control" name="password" style="font-size:20px">
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                   <!-- <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label" style="font-size:20px">จำฉันไว้</label>
                                    <a href="#" class="ml-auto mb-0" style="font-size:20px">ลืมรหัสผ่าน?</a>-->
                                </div>
                            </div>
                            <div class="row mb-3 px-3">
                                <center>
                                    <button type="submit" name="signin"
                                        class="btn btn-blue text-center" style="font-size:20px">เข้าสู่ระบบ</button>
                                </center>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">UNITY FOCUS &copy; 2023. All rights reserved. Siridet.0934576814.</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>