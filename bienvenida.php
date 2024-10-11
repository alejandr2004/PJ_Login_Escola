<link rel="stylesheet" href="./css/styles.css">
<header>
    <img class="imgNet" src="./img/img_net.svg" alt="">
    <img class="imgLogo" src="./img/img_logo.svg" alt="">
</header>
<?php
session_start();
if(isset($_SESSION['check'])){
$usuario = $_SESSION['usuario'];
?>
    <div class="login">
        <?php
        echo "<h2>Bienvenido a la intranet!</h2>";
        echo "<p><strong> Nombre de usuario:</strong> ". ucfirst(htmlspecialchars($usuario)) . "</p>";
        ?>
    </div>
<?php
}else{
    header("Location: index.php");
}
session_destroy();