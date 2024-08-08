<?php 
    require 'includes/funciones.php';
    includeTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacad2.jpg" alt="Imagen destacada de la propiedad en venta">
        </picture>
        <p class="informacion-meta">Escrito el <span>20/10/2024</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
           
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit labore deserunt necessitatibus iure, dolorum qui ullam, in, error porro nisi dignissimos quo pariatur incidunt temporibus! Quis magni laborum ducimus dignissimos.
            Molestiae possimus dolor deleniti doloremque accusamus, quas optio quidem consequuntur blanditiis natus? Tenetur, doloremque quos alias et dolore obcaecati laudantium, quo nostrum a nulla, doloribus similique velit numquam voluptatem harum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa optio consectetur neque tenetur corporis voluptatibus, veritatis architecto, beatae fuga voluptate ullam illum aliquid perferendis id ut doloremque ex inventore. Aut.</p>
        </div>
    </main>
    
    <?php includeTemplate('footer');?>