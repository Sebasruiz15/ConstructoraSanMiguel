<?php

    require '../../includes/app.php';
    use App\Propiedad;
    

    

    estaAutenticado();

// Base de datos
$db = conectarDb();

// consultar pa obtener los vendedores 
$consulta =  "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo con mensaje de errores
$errores = [];

    $titulo = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedor_id ='';

// Ejecuta el codigo despues de que el usuario envia el formulario 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $propiedad = new Propiedad($_POST);

    $propiedad->guardar();

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    exit;

    $titulo = mysqli_real_escape_string($db,  $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db,  $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db,  $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db,  $_POST['estacionamiento']);
    $vendedor_id = mysqli_real_escape_string($db,  $_POST['vendedor_id']);
    $creacion = date('Y/m/d');
    
    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];

   

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo ";
    }

    // if (!strlen($descripcion) -50 ) {
    //     $errores[] = "Debes añadir una descripción  ";
    // }

    if (!$habitaciones) {
        $errores[] = "Debes añadir cuantas habitaciones son ";
    }

    if (!$wc) {
        $errores[] = "Debes añadir cuantos baños son  ";
    }

    if (!$estacionamiento) {
        $errores[] = "Debes añadir cuantos estacionamiento son  ";
    }

    if (!$vendedor_id) {
        $errores[] = "Elige un vendedor ";
    }

    if(!$imagen["name"]) {
        $errores[] = "La imagen es obligatoria";
    }

    // Validar por el tamaño (100 Kb máximo)

    $medida = 1000 * 1000;

    if($imagen['size'] < $medida ){
        $errores[] = "La imagen es muy pesada";
    }


    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    // Revisar el arreglo de errores

    if (empty($errores)) {

        /**SUBIDA DE ARCHIVOS  */

        // Crear carpeta 
        $carpetaImagenes = '../../imagenes';

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }
        

        // Generar un nombre unico 
        $nombreImagen = md5(uniqid(rand(), true )). ".jpg";

        // Subir la imagen 

        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen);


       



        

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario 

            header("location: /admin?Resultado=1");
        }
    }


}


incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear Proyecto</h1>

    <a href="/admin" class="boton boton-cafeClaro">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form action="/admin/propiedades/crear.php" enctype="multipart/form-data" class="formulario" method="POST">

        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Nombre Proyecto" value="<?php echo $titulo; ?>">

            <label for="imegen">Imagen:</label>
            <input type="file" id="imagen" name="imagen"accept="image/jpeg, image/png">

            <label for="descripcion">Descripción: </label>
            <textarea name="descripcion" id="descripcion"> <?php echo $descripcion; ?> </textarea>
        </fieldset>


        <fieldset>
            <legend>Espacios</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">


        </fieldset>

        <fieldset>
            <legend>Vendedores</legend>

            <select name="vendedor_id">
                <option value="">--Selecione--</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>

                    <option <?php echo $vendedor_id === $vendedor['id'] ? 'selected' : ''; ?>  value="<?php echo $vendedor ['id']; ?> "><?php echo $vendedor ['nombre']." ". $vendedor['apellido']; ?> </option>

                <?php endwhile; ?>
            </select>

        </fieldset>
        <input type="submit" value="Crear" class="boton boton-cafeClaro">
    </form>


</main>

<?php
incluirTemplate('footer');
?>