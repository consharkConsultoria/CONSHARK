<?php
@session_start();
require('config.php');
extract($_FILES);
extract($_POST);

if (isset($_GET['adm_id'])) {
    //TA MEIO ERRADO, MAS DA PRA ARRUMAR DPS
    $msg = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $_GET[adm_id]");
    $row = mysqli_fetch_assoc($msg);
  
    if($row['clienteOuAdm'] == "adm"){
      $adm_id = $_GET['adm_id'];
      $_SESSION['adm_id'] = $adm_id;
    }else{
      $adm_id = 849033943;
    }
  }
  
  if (isset($_GET['unique_id'])) {
    $user_id = $_GET['unique_id'];
    $_SESSION['unique_id'] = $user_id;
  }

if (isset($_FILES['img_projeto'])) {
    $imgData = "imgProjetos/".md5(time().$_FILES['img_projeto']['tmp_name']).".jpg";
    move_uploaded_file($_FILES['img_projeto']['tmp_name'], $imgData);
    
    if (mysqli_query($conn, "INSERT INTO `imgprojeto` (`unique_id`, `img`) VALUES ('$user_id', '$imgData')")) {
        header("Location: adm.php?unique_id=" . $user_id . "&adm_id=" . $adm_id);
    } else { 
        echo "Foto não adicionada";
    }
}

?>
