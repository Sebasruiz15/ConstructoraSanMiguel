<?php

require('includes/config/database.php');
$db = conectarDb();
// Auntenticar Usuario

$errores = [];


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo"<pre>";
    var_dump($_POST);
    echo"</pre>";


    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

    $password = mysqli_real_escape_string($db, $_POST['password'] );

    if(!$email) {
        $errores[] = "El correo es obligario o no es valido";
    }

    if(!$password) {
        $errores[] = "La contraseña es obligaria";
    }

}


// Incluye el header
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión </h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>

        </div>

    <?php endforeach ?>

    <form method="POST" class="formulario">

        <fieldset>

            <legend>Correo y Contraseña</legend>
            

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email" re>

            <label for="password">Correo</label>
            <input type="password" name="password" placeholder="Tu Contraseña" id="password">

        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton boton-cafeClaro">
    </form>



</main>

<?php
incluirTemplate('footer');
?>