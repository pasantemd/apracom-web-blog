<?php
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['comentario'])) {
    $fecha = date('Y-m-d H:i:s');
    $texto = "[" . $fecha . "] " . $data['comentario'] . "\n----------\n";
    file_put_contents('comentarios.txt', $texto, FILE_APPEND);
    echo json_encode(["status" => "ok"]);
}
?>