<?php
@session_start();
require('config.php');
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
$percent_complete = 0;

if (isset($_POST['atv-input'])) {
    $atv_data = $_POST['atv-data']; 
    $atv_msg = $_POST['atv-msg'];
    $atv_cor = $_POST['atv-cor']; 

    $sql = "INSERT INTO atividadesrecentes (unique_id, data, atividade, cor) VALUES ('$user_id', '$atv_data', '$atv_msg', '$atv_cor')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: adm.php?unique_id=" . $user_id . "&adm_id=" . $adm_id);
        exit();
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
}
?>
