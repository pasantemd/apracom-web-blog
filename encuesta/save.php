<?php
// Recibir datos del frontend
$datosRecibidos = json_decode(file_get_contents('php://input'), true);

if ($datosRecibidos) {
    // Leer lo que ya hay en el archivo
    $archivo = 'votos.json';
    $jsonActual = json_decode(file_get_contents($archivo), true);

    // Sumar el nuevo voto al total existente
    $jsonActual['v1'] += $datosRecibidos['v1'];
    $jsonActual['v2'] += $datosRecibidos['v2'];

    // Guardar de nuevo en el archivo
    file_put_contents($archivo, json_encode($jsonActual));
    
    // Devolver los datos actualizados para que el usuario los vea
    header('Content-Type: application/json');
    echo json_encode($jsonActual);
}
?>