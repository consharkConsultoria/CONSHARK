<?php
@session_start(); 
require('config.php');
extract($_POST);
$password = md5($password);
$newpassword = md5($newpassword);
$renewpassword = md5($renewpassword);
$sql = mysqli_query($conn, "SELECT * FROM users");
$row = mysqli_fetch_assoc($sql);

$msg = "";
if (isset($_SESSION['unique_id'])) {

  if($password == $row['password']){
    if($newpassword == $renewpassword){
        $sql = "UPDATE `users` SET `password` = '$newpassword' WHERE unique_id = {$_SESSION['unique_id']}";
    
        $result = mysqli_query($conn, $sql);
        $msg = "Dados atualizados com sucesso!";
    }else{
    $msg = "As senhas não batem.";
    }

  }else{
    $msg = "Senha incorreta";
  }
    

  $_SESSION['msg'] = $msg;
  mysqli_close($conn);
  header("location:users-profile.php");
}
?>
