<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empresa</title>
    <link rel="stylesheet" href="http://localhost/ResidentConnect/assets/css/editorStyle.css">
</head>

<body>
    <form action="php/Agregar.php" method="POST">
        <h2>Agregar Empresa</h2>
        <label for="empresa">Empresa:</label>
        <input type="text" id="empresa" name="empresa" required>

        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" required>

        <label for="puesto">Puesto:</label>
        <input type="text" id="puesto" name="puesto" required>

        <input type="submit" value="Agregar" name="Agregar">
    </form>

    <label class="switch">
        <input type="checkbox" id="modoOscuroSwitch">
        <span class="slider round"></span>
    </label>

    <script src="/assets/JavaScript/ModoOscuro.js"></script>

</body>

</html>