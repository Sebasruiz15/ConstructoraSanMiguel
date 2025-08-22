<?php

require 'includes/app.php';
$db = conectarDb();
// Auntenticar Usuario

$errores = [];


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

    $password = mysqli_real_escape_string($db, $_POST['password'] );

    if(!$email) {
        $errores[] = "El correo es obligario o no es valido";
    }

    if(!$password) {
        $errores[] = "La contraseña es obligaria";
    }

    if(empty($errores)){
        // Revisar si el usuario existe

        $query = "SELECT * FROM usuarios WHERE email ='{$email}'";
        $resultado = mysqli_query($db, $query);

       

        if($resultado -> num_rows ) {

            // Revisar si el Password es correcto
            $usuario = mysqli_fetch_assoc($resultado);


            // Verificar si el usuario es correcto
            $auth = password_verify($password, $usuario['password']);

            if($auth){
                // El usuario esta autenticado
                session_start();

                // Llenar el arreglo de la sesión 
                $_SESSION['usuraio'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');

              }else {
                $errores[] = "Contraseña es incorrecta";
              }  
            } else {
                $errores[] = "Usuario no existe";
            }
        }
    }       
    




// Incluye el header

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