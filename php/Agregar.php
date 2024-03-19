<?php
require_once 'conexion_be.php'; // Asegúrate de que el archivo se incluya correctamente

if (isset($_POST['Agregar'])) {
    $empresa = trim($_POST['empresa']);
    $carrera = trim($_POST['carrera']);
    $puesto = trim($_POST['puesto']);

    if (
        strlen($empresa) > 0 &&
        strlen($carrera) > 0 &&
        strlen($puesto) > 0
    ) {
        $carga = "INSERT INTO empresas (empresa, carrera, puesto) VALUES ('$empresa', '$carrera', '$puesto')";
        $resultado = mysqli_query($conexion, $carga);
        if ($resultado) {
            echo "Datos guardados";
        } else {
            echo "Error al guardar: " . mysqli_error($conex); // Muestra el error de MySQL para depurar
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
