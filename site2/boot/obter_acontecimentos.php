<?php

require('config.php');


$user_id = 1604867632; /////TESTE ERRADO APAGAR


$query = "SELECT atividade1 FROM atividadesrecentes ORDER BY data ASC WHERE unique_id = '$user_id'";
$result = $conn->query($query);


$acontecimentos = array();


while ($row = $result->fetch_assoc()) {
    $acontecimentos[] = $row;
}




// Retornando os dados em formato JSON
header("Content-type: application/json");
echo json_encode($acontecimentos);
?>
