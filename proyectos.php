<?php include('includes/templates/header.php'); ?>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2>Casas, Apartamentos y Lotes en ventas</h2>
           

        <?php 
            $limite = 10;
            include 'includes/templates/anuncios.php';       
          ?>

    </main>
<?php 

include('includes/templates/footer.php'); 
?>

</php>