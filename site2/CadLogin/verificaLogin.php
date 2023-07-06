
<?php  
    @session_start();
    include_once "php/config.php";

    $msg = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $_SESSION[unique_id]");
    $row = mysqli_fetch_assoc($msg);

    if($row['clienteOuAdm'] == "adm"){

    header("Location: ../boot/adm.php?adm_id={$_SESSION['unique_id']}");
    }else{
        header("Location: ../boot/index.php?user_id={$_SESSION['unique_id']}");

    }
?>
