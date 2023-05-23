<?php
if (($_GET['name']) == 'susco') {
    require_once '../config/susco_db.php';
    $sql = $conn->prepare("SELECT * FROM NM10");
    $sql->execute();
    $result = $sql->fetchAll();

} else if (($_GET['name']) == 'bck') {
    require_once '../config/bck_db.php';
    $sql = $conn->prepare("SELECT * FROM NM10");
    $sql->execute();
    $result = $sql->fetchAll();

} else if (($_GET['name']) == 'pkn') {
    require_once '../config/pkn_db.php';
    $sql = $conn->prepare("SELECT * FROM NM10");
    $sql->execute();
    $result = $sql->fetchAll();

} else if (($_GET['name']) == 'ptg') {
    require_once '../config/ptg_db.php';
    $sql = $conn->prepare("SELECT * FROM NM10");
    $sql->execute();
    $result = $sql->fetchAll();

} else if (($_GET['name']) == 'mk') {
    require_once '../config/shell_db.php';
    $sql = $conn->prepare("SELECT * FROM NM10");
    $sql->execute();
    $result = $sql->fetchAll();

}
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../css/tank.css">
    <link rel="stylesheet" href="../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">
    <title>เอกสาร น.ม. 10</title>
    <style>
        td {
            font-size: 25px;
        }
        body {
            background-color: #eefdfd;
        }
        .table#newTable{
            border: 1px solid black;
            border-radius: 5px;
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
                    <?php if (($_GET['name'] == 'susco')) { ?>
                        <a class="nav-link"
                            href="../tank/susco.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                            กลับหน้าคลัง
                        </a>
                    <?php } else if (($_GET['name'] == 'bck')) { ?>
                            <a class="nav-link"
                                href="../tank/bck.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                กลับหน้าคลัง
                            </a>
                    <?php } else if (($_GET['name'] == 'pkn')) { ?>
                                <a class="nav-link"
                                    href="../tank/pkn.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                    กลับหน้าคลัง
                                </a>
                    <?php } else if (($_GET['name'] == 'ptg')) { ?>
                                    <a class="nav-link"
                                        href="../tank/ptg.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                        กลับหน้าคลัง
                                    </a>
                    <?php } else if (($_GET['name'] == 'mk')) { ?>
                                        <a class="nav-link"
                                            href="../tank/shell.php?id=<?php echo $_GET['id'] ?>&user=<?php echo $_GET['user'] ?>">
                                            กลับหน้าคลัง
                                        </a>
                    <?php } ?>
                </li>

            </ul>
        </div> <!-- navbar-collapse.// -->
        <a style="color:white;font-size:25px;">
            ชื่อผู้ใช้งาน :
            <?php echo $_GET['user'] ?>
        </a>
        <a href="../logout.php">
            <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
        </a>
    </nav>


    <div class="container">
        <br>
        <?php if ($_GET['name'] == 'susco') { ?>
            <center>
                <table border="0">
                    <tr>
                        <td>
                            <img src="../images/Susco_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        </td>
                        <td>
                            <h1 class="card-title"><b>คลังน้ำมันราษฎร์บูรณะ</b></h1>
                        </td>
                    </tr>
                </table>
            </center>
        <?php } ?>
        <?php if ($_GET['name'] == 'bck') { ?>
            <center>
                <table border="0">
                    <tr>
                        <td>
                            <img src="../images/PTT_Logo.png" class="image"
                                style="height:80px;width:80pxmargin-right:20px;">
                        </td>
                        <td>
                            <h1 class="card-title">คลังน้ำมันปิโตรเลียมบางจาก</h1>
                        </td>
                    </tr>
                </table>
            </center>
        <?php } ?>
        <?php if ($_GET['name'] == 'pkn') { ?>
            <center>
                <table border="0">
                    <tr>
                        <td>
                            <img src="../images/PTT_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        </td>
                        <td>
                            <h1 class="card-title"><b>คลังน้ำมันปตท.พระโขนง</b></h1>
                        </td>
                    </tr>
                </table>
            </center>
        <?php } ?>
        <?php if ($_GET['name'] == 'ptg') { ?>
            <center>
                <table border="0">
                    <tr>
                        <td>
                            <img src="../images/PTG_Logo.jpg" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        </td>
                        <td>
                            <h1 class="card-title"><b>คลังน้ำมันพีทีจีแม่กลอง</b></h1>
                        </td>
                    </tr>
                </table>
            </center>
        <?php } ?>
        <?php if ($_GET['name'] == 'mk') { ?>
            <center>
                <table border="0">
                    <tr>
                        <td>
                            <img src="../images/Shell_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        </td>
                        <td>
                            <h1 class="card-title"><b>คลังน้ำมันเชลล์แม่กลอง</b></h1>
                        </td>
                    </tr>
                </table>
            </center>
        <?php } ?>
        <br>
        <center>
            <table border="0">
                <tr>
                    <td align="center" width="1000px">
                        <h2>เอกสาร น.ม.10</h2>
                    </td>
                    <td align="right">
                        <right>
                            <form action="../forms/form10.php" method="get">
                                <input name="name" type="hidden" value="<?= $_GET['name'] ?>">
                                <input name="id" type="hidden" value="<?= $_GET['id'] ?>">
                                <input name="user" type="hidden" value="<?= $_GET['user'] ?>">
                                <button class="btn btn-primary" type="submit" name="add"
                                    style="font-size:20px">เพิ่มข้อมูล</button>
                            </form>
                        </right>
                    </td>
                </tr>
            </table>
        </center>

        <table id="newTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>เลขที่เอกสาร</th>
                    <th>วันที่</th>
                    <th>ชื่อบริษัท</th>
                    <th>ปุ่ม</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result == null) { ?>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                <?php } else { ?>
                    <?php foreach ($result as $z) { ?>
                        <tr>
                            <td>
                                <?php echo $z['ID'] ?>
                            </td>
                            <td>
                                <?php echo $z['no_bill']; ?>
                            </td>
                            <td>
                                <?php echo $z['date_start']; ?>
                            </td>
                            <td>
                                <?php if (($z['name_depot']) == '') {
                                    echo "Nodata";

                                } else {
                                    echo $z['name_depot'];
                                }
                                ?>
                            </td>
                            <td align="center">
                                <form action="paper/paper10.php" method="post">
                                    <?php $aa = $z['ID'] ?>
                                    <input name="id" type="hidden" value="<?= $aa ?>">
                                    <input name="db" type="hidden" value="<?= $_GET['name'] ?>">
                                    <input name="user" type="hidden" value="<?= $_GET['user'] ?>">
                                    <input class="btn btn-primary" type="submit" value="ข้อมูลคลัง" name="goto"
                                        formtarget="_blank" style="font-size:20px">
                                </form>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>

            </tbody>
        </table>
    </div>
    <br>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../script/tank.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https:////cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $("#newTable").DataTable();
    });
</script>

</html>