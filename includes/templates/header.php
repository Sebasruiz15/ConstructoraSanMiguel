<?php  
    

    if(!isset($_SESSION)) {
        session_start();

    }

    $auth = $_SESSION['login'] ?? false;

?>   




<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Miguel</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="icon" href="/build/img/lgsan.ico">
</head>

<body>
    <header class="header <?php echo isset($inicio) && $inicio ? 'inicio' : '' ?>">


        <div class="contenedor contenido-header">
            <div class="barra">
                    <a href="index.php">
                        <img src="/build/img/logosanmiguel.svg" alt="Logo San Miguel">
                    </a>
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">

                </div>

                <div class="derecha">
                    <!-- <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt=""> -->
                     <nav class="navegacion">

                    <a href="nosotros.php">Nosotros</a>
                    <a href="Proyectos.php">Proyectos</a>
                    <a href="contacto.php">Contacto</a>
                    <?php if($auth): ?>
                    <a href="cerrar-sesion.php">Cerrar Sesión</a>
                    <?php endif; ?>



                </nav>
                </div>
            </div><!--.barra-->
                <?php
                     if(isset($inicio) && $inicio){
                            echo "<h1>Inmobiliaria y Constructora San Miguel</h1>";
                         }
                ?>

        </div>
    </header>    
</body> 