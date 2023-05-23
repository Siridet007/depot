<?php
session_start();
if (isset($_SESSION['db'])) {
    $name = $_SESSION['db'];
} else {
    $name = $_POST['name'];
}
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    $id = $_POST['id'];
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    $user = $_POST['user'];
}
?>
<?php
unset($_SESSION['db']);
unset($_SESSION['id']);
unset($_SESSION['user']);
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
    <link rel="stylesheet" href="../css/tank.css">
    <link rel="stylesheet" href="../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-th.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="icon" type="image/png" href="../images/Sub-logo.png">
    <title>เพิ่มข้อมูลเอกสาร น.ม.9 โดยรูปภาพ</title>
    <style>
        body {
            background-color: #eefdfd;
        }
        .card1 {
            text-align: left;
            padding: 30px 40px;
            margin: 0%;
            margin-top: 20px;
            margin-bottom: 5px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
            background-color: #FFFFFF;
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
                    <?php if (($name == 'susco')) { ?>
                        <a class="nav-link"
                            href="../document/doc9.php?name=susco&id=<?php echo $id ?>&user=<?php echo $user ?>">
                            เอกสาร น.ม. 9
                        </a>
                    <?php } else if (($name == 'bck')) { ?>
                            <a class="nav-link"
                                href="../document/doc9.php?name=bck&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                เอกสาร น.ม. 9
                            </a>
                    <?php } else if (($name == 'pkn')) { ?>
                                <a class="nav-link"
                                    href="../document/doc9.php?name=pkn&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                    เอกสาร น.ม. 9
                                </a>
                    <?php } else if (($name == 'ptg')) { ?>
                                    <a class="nav-link"
                                        href="../document/doc9.php?name=ptg&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                        เอกสาร น.ม. 9
                                    </a>
                    <?php } else if (($name == 'mk')) { ?>
                                        <a class="nav-link"
                                            href="../document/doc9.php?name=mk&id=<?php echo $id ?>&user=<?php echo $user ?>">
                                            เอกสาร น.ม. 9
                                        </a>
                    <?php } ?>
                </li>

            </ul>
        </div> <!-- navbar-collapse.// -->
        <a style="color:white;font-size:25px;">
            ชื่อผู้ใช้งาน :
            <?php echo $user ?>
        </a>
        <a href="../logout.php">
            <li class="btn btn-danger" style="font-size:20px;margin-left:20px">ออกจากระบบ</li>
        </a>
    </nav>

    <div class="container">
        <center>
            <table border="0">
                <tr>
                    <td>
                        <?php if ($name == 'susco') { ?>
                            <img src="../images/Susco_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'bck') { ?>
                            <img src="../images/PTT_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'pkn') { ?>
                            <img src="../images/PTT_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'ptg') { ?>
                            <img src="../images/PTG_Logo.jpg" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                        <?php if ($name == 'mk') { ?>
                            <img src="../images/Shell_Logo.png" class="image"
                                style="height:80px;width:80px;margin-right:20px;">
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($name == 'susco') { ?>
                            <h1><b>คลังน้ำมันราษฎร์บูรณะ</b></h1>
                        <?php } ?>
                        <?php if ($name == 'bck') { ?>
                            <h1><b>คลังน้ำมันปิโตรเลียมบางจาก</b></h1>
                        <?php } ?>
                        <?php if ($name == 'pkn') { ?>
                            <h1><b>คลังน้ำมันปตท.พระโขนง</b></h1>
                        <?php } ?>
                        <?php if ($name == 'ptg') { ?>
                            <h1><b>คลังน้ำมันพีทีจีแม่กลอง</b></h1>
                        <?php } ?>
                        <?php if ($name == 'mk') { ?>
                            <h1><b>คลังน้ำมันเชลล์แม่กลอง</b></h1>
                        <?php } ?>
                    </td>
                </tr>
            </table>
        </center>
        <div class="card1">
            <div class="container">
                <center>
                    <form action="../db/img_db.php" method="POST" enctype="multipart/form-data">
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
                        <?php if (isset($_SESSION['warning'])) { ?>
                            <div class="alert alert-warnig" role="alert">
                                <?php
                                echo $_SESSION['warning'];
                                unset($_SESSION['warning']);
                                ?>
                            </div>
                        <?php } ?>
                        <center>
                            <input type="file" style="width:350px;font-size:20px;height:auto" name="file"
                                class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                            <output text-align="center"></output>

                            <br>
                            <div class="form-group" style="width:350px;font-size:20px">
                                <label for="no_bill">เลขที่เอกสาร (ตามใบกำกับสินค้า) </label>
                                <input type="text" class="form-control" name="no_bill" style="font-size:20px">
                            </div>
                            <input name="id" type="hidden" value="<?= $id ?>">
                            <input name="user" type="hidden" value="<?= $user ?>">
                            <input name="db" type="hidden" value="<?= $name ?>">
                            <input type="submit" style="width:100px;font-size:20px" name="submit" value="บันทึก"
                                class="btn btn-sm btn-primary mb-3">
                        </center>
                    </form>

                </center>
            </div>
            <br>
        </div>

        <br>
    </div>
</body>
<script>
    const input = document.querySelector("input")
    const output = document.querySelector("output")
    let imagesArray = [];
    input.addEventListener("change", () => {
        const file = input.files
        imagesArray.push(file[0])
        displayImages()
    });
    function displayImages() {
        let images = ""
        imagesArray.forEach((image, index) => {
            images += `<div class="image" position"absolute">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <span onclick="deleteImage(${index})">&times;</span>
              </div>`
        })
        output.innerHTML = images
    }
    function deleteImage(index) {
        imagesArray.splice(index, 1)
        displayImages()
    }

</script>

</html>