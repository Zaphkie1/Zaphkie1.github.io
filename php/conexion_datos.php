<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion_be.php';

// Consulta SQL para obtener datos de empresas
$sql = "SELECT * FROM empresas";
$result = mysqli_query($conexion, $sql);

$empresas = array();
if (mysqli_num_rows($result) > 0) {
    // Obtener los datos de cada fila
    while($row = mysqli_fetch_assoc($result)) {
        // Construir el enlace según tus necesidades
        $link = "http://localhost/ResidentConnect/Inicio.php" . strtolower(str_replace(' ', '', $row['empresa'])) . ".html";
        // Agregar los datos al array
        $empresas[] = array(
            'empresa' => $row['empresa'],
            'carrera' => $row['carrera'],
            'puesto' => $row['puesto'],
            'link' => $link
        );
    }
}

// Devolver los datos en formato JSON
echo json_encode($empresas);

// Cerrar la conexión
mysqli_close($conexion);
?>
