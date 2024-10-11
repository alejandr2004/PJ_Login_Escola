<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./scripts/script.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <img class="imgNet" src="./img/img_net.svg" alt="">
        <img class="imgLogo" src="./img/img_logo.svg" alt="">
    </header>
        <form method="POST" action="./validaciones_php/procValidaciones.php" class="login" onsubmit="return ValidaForm()">
            <h4>Iniciar sesión</h4>
                <label for="">Usuario:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Introduce su nombre de usuario" onblur="ValidaUserName()">
            <p class="error" id="error_user"></p> 
            <br>
                <label for="">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Introduce su contraseña" onblur="ValidaPsswd()">
            <p class="error" id="error_psswd"></p>
                <button type="submit" value="ENTRAR">Iniciar sesión</button>
        </form>   
</body>
</html>