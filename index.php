<?php

require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>
<main class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>

    <div class="icono-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>En Inmobiliaria y Constructora San Miguel, tu seguridad y confianza son nuestra prioridad. Nos
            comprometemos con la transparencia en cada proceso de compra, asegurando que todos nuestros
            proyectos cumplen rigurosamente con las normativas legales y los más altos estándares de calidad.
            Brindamos asesoría especializada, contratos claros y respaldo jurídico para que inviertas con total
            tranquilidad. Con nosotros, cada decisión es segura y respaldada.</p>

        </div>


        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>En Inmobiliaria Constructora San Miguel, nos especializamos en proyectos de obra civil y construcción
            de viviendas, ofreciendo soluciones de alta calidad a precios accesibles. Nos enfocamos en crear
            espacios bien diseñados, funcionales y seguros, garantizando una inversión confiable para nuestros
            clientes. Construimos con compromiso, transparencia y pensando en tu bienestar</p>

        </div>


        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>En Inmobiliaria y Constructora San Miguel es una empresa líder en el desarrollo y ejecución de
            proyectos de construcción, brindando soluciones innovadoras y de alta calidad. Con amplia
            experiencia en el sector, nos especializamos en obras residenciales, comerciales e industriales,
            garantizando eficiencia, compromiso y la máxima satisfacción de nuestros clientes.</p>

        </div>
    </div>
</main>
<section class="seccion contenedor">
    <h2>Casas, Apartamentos y Lotes en ventas</h2>
    
       <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php';       
       ?>
    
        <div class="alinear-derecha">
            <a href="proyectos.php" class="boton-cafeClaro">Ver Todas</a>
        </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra el apartamentos de tus sueños</h2>

    <a href="contacto.php" class="boton-cafeOscuro">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Multifamiliar San Miguel Campestre Lote 60</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/cam01.webp" type="image/webp">
                    <source srcset="build/img/cam01.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/cam01.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php"></a>
                <h4>San Miguel Camprestre Lote 60 </h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2025</span>por: <span>San Miguel</span></p>

                <p>
                    San Miguel Camprestre Lote 60
                </p>
                
             
            </div>

        </article>


        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/cam02.webp" type="image/webp">
                    <source srcset="build/img/cam02.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/cam02.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php"></a>
                <h4>San Miguel Camprestre Lote 60 </h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2025</span>por: <span>San Miguel</span></p>

                <p>
                    San Miguel Camprestre Lote 60
                </p>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                "Nos sorprendieron gratamente. No solo cumplieron con lo prometido, sino que superaron nuestras
                expectativas. ¡Un equipo muy serio y recomendado!"

            </blockquote>
            <!-- <p>Chanchito Perez</p> -->
        </div>
    </section>
</div>

<?php

include('includes/templates/footer.php');
?>

</php>