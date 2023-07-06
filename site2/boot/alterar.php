<?php
require('config.php');
@session_start();
$msg = "";
if (isset($_SESSION['unique_id'])) {
  extract($_POST);

  $sql = "UPDATE `users` SET `About` = '$about', `Endereco` = '$address', `Telefone` = '$phone', `Twitter` = '$twitter', `Facebook` = '$facebook', `Instagram` = '$instagram', `Linkedin` = '$linkedin' WHERE unique_id = {$_SESSION['unique_id']}";
//`fnome` = '$firtsName', `lname` = '$secName', 

  $result = mysqli_query($conn, $sql);


  if ($result) {
    $msg = "Dados atualizados com sucesso!";
  } else {
    $msg = "Ocorreu um erro ao atualizar os dados.";
  }

  mysqli_close($conn);
  header("location:users-profile.php");
}
?>
