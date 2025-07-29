<?php

// Importar la conexion 

require '../includes/config/database.php';
$db = conectarDb();


// Escribir el Query
$query = "SELECT * FROM propiedades";



// Consultar la Db 

$resultadoConsulta = mysqli_query($db, $query);


// mostar mensaje condicional 

$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);


    if ($id) {
        // Elimina el archivo
        $query = "SELECT imagen FROM propiedades WHERE id = {$id}";

        $resultado = mysqli_query($db, $query);
        $propiedades = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedades['imagen']);

        // Elimina la propiedad 
        $query = "DELETE FROM propiedades WHERE id = {$id}";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('location: /admin?resultado=3');
        }
    }
}

// Incluye un template
require '../includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1> Administrador de San Miguel </h1>
    <?php if (intval($resultado) === 1): ?>
        <p class="alerta exito">Proyecto Creado Correctamente</p>
    <?php elseif (intval($resultado) === 2): ?>
        <p class="alerta exito">Proyecto Actualizado Correctamente</p>
    <?php elseif (intval($resultado) === 3): ?>
        <p class="alerta exito">Proyecto Eliminado Correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-cafeClaro">Nuevo Proyecto</a>


    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>titulo</th>
                <th>Imagen</th>
                <th>Acciones</th>
                <!-- <th></th> -->
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados-->
            <?php while ($propiedades = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td> <?php echo $propiedades['id']; ?> </td>
                    <td> <?php echo $propiedades['titulo']; ?> </td>
                    <td> <img src="/imagenes/<?php echo $propiedades['imagen']; ?>" class="imagen-tabla" alt=""></td>
                    <td>
                        <form method="POST" class="w-100">


                            <input type="hidden" name="id" value="<?php echo $propiedades['id']; ?>">


                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>

                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedades['id']; ?>" class="boton-verde-block">Actualizar </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>



    </table>



</main>

<?php
//  Cerrar la conexión 
mysqli_close($db);



incluirTemplate('footer');
?>