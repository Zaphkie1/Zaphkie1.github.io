<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Empresas</title>
</head>
<body>
    <h1>Listado de Empresas</h1>

    <!-- Formulario de búsqueda -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="search">Buscar:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Buscar</button>
    </form>

    <?php
    include 'funciones.php'; // Incluimos el archivo con las funciones

    // Si se ha enviado un término de búsqueda, lo utilizamos para buscar
    if(isset($_GET['search'])) {
        $termino_busqueda = $_GET['search'];
        buscar($termino_busqueda);
    }

    // Si se ha seleccionado una carrera, filtramos por esa carrera
    if(isset($_GET['carrera'])) {
        $carrera = $_GET['carrera'];
        filtrarPorCarrera($carrera);
    }
    ?>

    <!-- Formulario de filtro por carrera -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="carrera">Filtrar por Carrera:</label>
        <select id="carrera" name="carrera">
            <option value="">Seleccionar Carrera</option>
            <option value="Ingeniería">Ingeniería</option>
            <option value="Medicina">Medicina</option>
            <!-- Agrega más opciones según las carreras disponibles en tu base de datos -->
        </select>
        <button type="submit">Filtrar</button>
    </form>

</body>
</html>
