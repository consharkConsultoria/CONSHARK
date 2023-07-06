<?php
@session_start();
require('config.php');
extract($_POST);
$user_id = 1604867632; // APAGAR TA ERRADO





if (isset($_POST['btnMaisRecente'])) {
    $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id ORDER BY `data` DESC";
} elseif (isset($_POST['btnMaisAntigas'])) {
    $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id ORDER BY `data` ASC";
} else {
    $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id";
}

header("Location:adm.php");
?>