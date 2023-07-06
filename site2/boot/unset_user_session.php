<?php

@session_start();
unset($_SESSION['user_id']);

// Realize qualquer outra lógica de unset necessária

// Redirecionar para outra página após o unset
header("Location: adm.php?user_id=' . $outgoing_id");
exit();
?>

?>