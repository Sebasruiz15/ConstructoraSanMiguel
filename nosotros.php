<?php 
require 'includes/app.php';
incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/equi.webp" type="image/webp">
                    <source srcset="build/img/equi.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/equi.jpg" alt="Sobre Nosotros">
                </picture>

            </div>
            <div class="texto-nosotros">
                <blockquote>
                    15 años de experiencia
                </blockquote>
                <p>
                    Somos una empresa dedicada a todo lo relacionado con proyectos de obra civil.Proporcionamos a
                    nuestros clientes servicio integral en construción,gestion inmobiliaria,diseño
                    arquitectónico,consultoria y servicios generales; bajo metodologias de punta que permiten garantizar
                    la sastifacion y cumplimiento total de sus necesidades.
                </p>

                <p>
                    Contamos con un equipo de trabajo conformado por profesionales y tecnicos calificados,comprometidos
                    con el desarrollo y bienestar de las organizaciones a través del mejoramiento continuo.
                </p>

            </div>
        </div>
    </main>
    
    <img src="build/img/todos.png" alt="Mesa de trabajo">



<?php 

include('includes/templates/footer.php'); 
?>

</php>