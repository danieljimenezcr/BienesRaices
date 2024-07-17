<?php include 'includes/templates/header.php' ?>

    <main class="contenedor">
        <h1 class="seccion">Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de Contacto">
        </picture>

        <h2>Ingresa tu información para contactarnos</h2>
        <form class="formulario" action="">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input  type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-Mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>

                <label for="opciones">Compra o Vende:</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="tel" placeholder="Tu Precio o Presupuesto id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Información Sobre la Propiedad</legend>
                <p>¿Cómo desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligió teléfono, elija la fecha y hora para ser contactado.</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="9:00" max="17:00">
            </fieldset>

            <input type="subnmit" value="Enviar" class="boton-verde">

        </form>
    </main>
    
    <?php include 'includes/templates/footer.php'?>