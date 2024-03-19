<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.2/tailwind.min.css" />
    <link rel="stylesheet" href="http://localhost/ResidentConnect/assets/css/lstilo.css" />
</head>
<body>
    <form action="./php/login_usuario_be.php" method="POST">
        <div class="form-group">
            <h1>Inicia Sesión</h1>
                <label for="email">Email</label>
                <input type="email" name="correo" spellcheck=false required placeholder="Email" autocomplete="off" />
                <label for="password">Password</label>
                <input type="password" name="contrasena" required placeholder="Password" autocomplete="off" />
                <button type="submit" class="submitbtn">Login</button>
            </form>
        </div>
</body>
</html>