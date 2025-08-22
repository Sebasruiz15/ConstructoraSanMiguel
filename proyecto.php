 <?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('location: /');
    }


    // Importar la conexion 
    require 'includes/app.php';

    $db = conectarDb();

    // Consultar

    $query = "SELECT * FROM propiedades WHERE id ={$id}";


    // Obtener resultado
    $resultado = mysqli_query($db, $query);

    if(!$resultado ->num_rows ) {
        header('location: /');

    }

    $propiedades = mysqli_fetch_assoc($resultado);

    
    incluirTemplate('header');
    ?>

 <main class="contenedor seccion contenido-centrado">
     <h1><?php echo $propiedades['titulo']; ?></h1>
     <img loading="lazy" src="/imagenes/<?php echo $propiedades['imagen']; ?>" alt="image/jpeg">

     <div class="contenido-anuncio">
         <h3><?php echo $propiedades['titulo']; ?></h3>
         <p> <?php echo $propiedades['descripcion']; ?></p>

         <ul class="iconos-caracteristicas">
             <li>
                 <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                 <p><?php echo $propiedades['wc']; ?></p>
             </li>

             <li>
                 <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                 <p><?php echo $propiedades['estacionamiento']; ?></p>
             </li>

             <li>
                 <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                 <p><?php echo $propiedades['habitaciones']; ?></p>
             </li>

 </main>








 <?php
    mysqli_close($db);


    incluirTemplate('footer');
    ?>