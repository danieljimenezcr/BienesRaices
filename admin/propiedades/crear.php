<?php 

    //Base de datos

    require '../../includes/config/database.php';
    $db = conectarDB();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
    
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor_id = $_POST['vendedor'];

        //Insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id) VALUES( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor_id' ) ";

        //echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado)  {
            echo "Insertado Correctamente";
        }
    
    }

    require '../../includes/funciones.php';
    includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Regresar</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información de Propiedad</legend>

                <label for="habitaciones"> Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej:2" min="1" max="9">

                <label for="wc"> Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej:2" min="1" max="9">

                <label for="estacionamiento"> Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej:2" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="Nombre"disabled selected>Selecciona el Vendedor</option>
                    <option value="1">Jacinto</option>
                    <option value="2">Daniel</option>
                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>
    
    <?php includeTemplate('footer');?>