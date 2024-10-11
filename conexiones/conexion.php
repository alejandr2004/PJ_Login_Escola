<?php
    $host = 'localhost';
    $user = 'root'; // Cambia por el nombre de usuario de tu base de datos
    $password = '';  // Cambia por la contraseña de tu base de datos
    $dbname = 'proyecto_login';  // Cambia por el nombre de tu base de datos
    

    try{
        $conn = mysqli_connect($host, $user, $password, $dbname);
    
    } catch (Exception $e){
        echo "Error: ". $e->getMessage();
        die();
    }
?>
