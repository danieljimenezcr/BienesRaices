<?php 
    require 'includes/funciones.php';
    includeTemplate('header');
?>
    <main class="contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        <?php 
            $limite = 12;
            include 'includes/templates/anuncios.php'
        ?>
    </main>
    
    <?php includeTemplate('footer');?>