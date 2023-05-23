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
    <link rel="icon" type="image/png" href="../../images/Sub-logo.png">
    <title>Document</title>
</head>

<body onload="window.print()">
    <div class="container">
        <center>
            <div class="row">
                <?php 
                $dir = "../../uploads/";
                echo "<img style='width:500px;' src='".$dir.$z['img']."'/>&nbsp;";
                 ?>
            </div>
        </center>

    </div>

</body>

</html>