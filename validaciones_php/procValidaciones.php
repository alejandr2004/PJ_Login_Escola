<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el campo nombre de usuario
    $usuario = htmlspecialchars($_POST["usuario"]);
    $password = htmlspecialchars($_POST["password"]);
    $errores = array();

    // Validación del nombre de usuario
    if (empty($usuario)) {
        $errores[] = "El campo nombre usuario no debe estar vacío";
    } elseif (strlen($usuario) < 3) {
        $errores[] = "El campo nombre usuario debe tener al menos 3 caracteres";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $usuario)) {
        $errores[] = "El campo nombre usuario solo puede contener letras y números";
    }

    // Validación de la contraseña
    if (empty($password)) {
        $errores[] = "El campo contraseña no debe estar vacío";
    } elseif (strlen($password) < 8) {
        $errores[] = "El campo contraseña debe tener al menos 8 caracteres";
    } elseif (!preg_match("/[a-zA-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
        $errores[] = "La contraseña debe contener al menos una letra y un número";
    }

    // Si hay errores, los mostramos
    if (!empty($errores)) {
        $_SESSION['errores'] = $errores; // Guardar los errores en la sesión
        header('Location: ../index.php'); // Redirigir de vuelta al formulario
        foreach ($errores as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Consulta para verificar el usuario y la contraseña
        include('../conexiones/conexion.php');

        // Selecciona el nombre de usuario y la contraseña de la tabla
        $stmt = $conn->prepare("SELECT psswd_usuario FROM tbl_usuarios WHERE nombre_usuario = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verifica si hay un resultado
        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
                // Almacena el usuario en la sesión
                if($_SESSION['usuario'] = $usuario){
                    // Mensaje de bienvenida
                    $_SESSION["check"]=1;
                    header('Location: ../bienvenida.php');
                    die();
                } else {
                echo "<p>Usuario o contraseña incorrectos.</p>";
            }
        } else {
            echo "<p>Usuario o contraseña incorrectos.</p>";
        }

        // Cierra la declaración y la conexión
        $stmt->close();
        $conn->close();
        
    }
}else{
    // Si el método de envío no es POST, redirecciona al formulario
    header('Location:../index.php');
    die();
}
?>





  



