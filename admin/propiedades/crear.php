<?php

require '../../includes/funciones.php';
 incluirTemplate('header');
 
?>

<main class="contenedor seccion">
    <h1>Crear </h1>

    <a href="/admin" class="boton boton-cafeClaro">Volver</a>

    <form action="" class="formulario">

    <fieldset>
        <legend>Información General</legend>

        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo"  placeholder="Nombre Proyecto">

         <label for="imegen">Imagen:</label>
        <input type="file" id="imegen" accept="image/jpeg, image/png" >

        <label for="descripcion">Descripción: </label>
        <textarea name="" id="descripcion"></textarea>
    </fieldset>


    </form>


</main>

<?php
 incluirTemplate('footer');
?>