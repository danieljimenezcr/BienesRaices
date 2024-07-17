<?php include 'includes/templates/header.php' ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen destacada de la propiedad en venta">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class='iconos-caracteristicas'>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono-wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono-estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono-habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit labore deserunt necessitatibus iure, dolorum qui ullam, in, error porro nisi dignissimos quo pariatur incidunt temporibus! Quis magni laborum ducimus dignissimos.
            Molestiae possimus dolor deleniti doloremque accusamus, quas optio quidem consequuntur blanditiis natus? Tenetur, doloremque quos alias et dolore obcaecati laudantium, quo nostrum a nulla, doloribus similique velit numquam voluptatem harum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa optio consectetur neque tenetur corporis voluptatibus, veritatis architecto, beatae fuga voluptate ullam illum aliquid perferendis id ut doloremque ex inventore. Aut.</p>
        </div>
    </main>
    
    <?php include 'includes/templates/footer.php'?>