<?php 
    require 'includes/funciones.php';
    includeTemplate('header');
?>
    <main class="contenedor">
        <h1 class="seccion">Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
                
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quod cumque vitae unde doloremque delectus quis id illo ipsum quaerat sed non reiciendis perspiciatis, expedita aliquid eos, sit architecto. Illo.
                Vero consequatur, aliquid corrupti iure quidem modi quis nam laudantium, eveniet adipisci cupiditate perspiciatis itaque iusto ipsa dignissimos! Eligendi accusantium asperiores ipsa a blanditiis cumque possimus suscipit fugiat labore vitae!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia impedit commodi facere dolorum vel facilis voluptatem natus reiciendis fugit, nostrum velit quam eaque? A iusto eos odit delectus doloribus neque.</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono de Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor aut eos veniam iusto quis. Quod, dignissimos exercitationem, culpa labore nihil tempora ex ea eum iure consectetur incidunt iste placeat in?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono de Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor aut eos veniam iusto quis. Quod, dignissimos exercitationem, culpa labore nihil tempora ex ea eum iure consectetur incidunt iste placeat in?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono de Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor aut eos veniam iusto quis. Quod, dignissimos exercitationem, culpa labore nihil tempora ex ea eum iure consectetur incidunt iste placeat in?</p>
            </div>
        </div>
    </section>
    
    <?php includeTemplate('footer');?>