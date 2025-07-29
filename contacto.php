<?php include('includes/templates/header.php'); ?>



    <main class="contenedor seccion ">
        <h1>Contactanos</h1>
<picture>
    <source srcset="build/img/NI6.webp" type="image/webp">
    <source srcset="build/img/NI6.jpg" type="image/jpeg">
    <img loading="lazy" src="build/img/NI6.jpg" alt="Imagen contacto">
</picture>
    <h2>Llene el formulario de contacto</h2>

    <form class="formulario" action="">

        <fieldset>

            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email">

            <label for="tefefono">Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="tefefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Propiedad</legend>
            <label for="opciones">Comprar</label>
            <select id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Nativo">Nativo</option>
                <option value="Portal de los Angeles">Portal de los Angeles</option>
                <option value="Cattleya">Cattleya</option>
                <option value="Jardines de San Miguel">Jardines de San Miguel</option>
                <option value="San Miguel Campestre">San Miguel Campestre</option>

            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="numer" placeholder="Tu Precio o Presupuesto" id="presupuesto">
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la Propiedad</legend>

            <p>Como desea ser contactado</p>
            <div class="forma-contacto" >
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono" >

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email" >
            </div>

            <p>Si eligio telefono,elija la fecha y la hora</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time"  id="hora" min="08:00" max="15:00">

        </fieldset>
    <input type="submit" value="Enviar" class="boton-cafeOscuro">

    </form>





    </main>
<?php 

include('includes/templates/footer.php'); 
?>


</php>