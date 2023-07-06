
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
//MUDAR O CÓDIGO PRA PEGAR O CÓDIGO DO USUÁRIO QUE ESTÁ NO CHAT
if (isset($_POST['valor_progesso'])) {
  $percent_complete = $_POST['valor_progesso'];
  $sql = "UPDATE progresso SET valor = $percent_complete WHERE usuario = '$user_id'";
  mysqli_query($conn, $sql);
  $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$user_id'");
  $row = mysqli_fetch_assoc($sql1);
  $sql1 = mysqli_query($conn, mysqli_query($conn, "UPDATE users SET progresso = '$percent_complete' WHERE unique_id = {$row['unique_id']}"));
  $_SESSION['progresso'] = $percent_complete;
  header("Location: adm.php?unique_id=" . $user_id . "&adm_id=" . $adm_id);

} else { 
    echo "não atualizado";
    $sql = "SELECT valor FROM progresso WHERE usuario = '$user_id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $percent_complete = $row['valor'];
  }
}
?>