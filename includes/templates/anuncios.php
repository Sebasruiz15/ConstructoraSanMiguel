 
 <?php
// Importar la conexion 
$db = conectarDb();

// Consultar

$query = "SELECT * FROM propiedades LIMIT {$limite}";


// Obtener resultado
$resultado = mysqli_query($db, $query);


?>
 
<div class="contenedor-anuncios">
    <?php while ($propiedades = mysqli_fetch_assoc($resultado)): ?>
        
    <div class="anuncio">
            
         <img loading="lazy" src="/imagenes/<?php echo $propiedades['imagen'];?>" alt="image/jpeg">
                
           
            <div class="contenido-anuncio">
                <h3><?php echo $propiedades['titulo'];?></h3>
                <p> <?php echo $propiedades['descripcion'];?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $propiedades['wc'];?></p>
                    </li>

                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $propiedades['estacionamiento'];?></p>
                    </li>

                    <li>
                        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p><?php echo $propiedades['habitaciones'];?></p>
                    </li>

                </ul>
                <a href="proyecto.php?id=<?php echo $propiedades['id'];?>" class="boton-cafeOscuro-block">
                    Ver Propiedad
                </a>
            </div> <!--.Contenido anuncio-->
        </div> <!-- anuncio-->
    <?php endwhile; ?>    
 </div> <!--.Contenido anuncio-->


<?php mysqli_close($db); ?> <!--Cierre de la base de datos-->

    