<?php 

    //Base de datos

    require '../../includes/config/database.php';
    $db = conectarDB();
    //Arreglo con mensajes de errores errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedor_id = '';

    //
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor_id = $_POST['vendedor'];

        if(!$titulo) {
            $errores[] = "Debes añadir un título";
        }
        if(!$precio) {
            $errores[] = "Debes añadir un precio";
        }
        if(!$descripcion) {
            $errores[] = "Debes añadir una descripcion";
        }
        if(!$habitaciones) {
            $errores[] = "Debes añadir el número de habitaciones";
        }
        if(!$wc) {
            $errores[] = "Debes añadir el número de baños";
        }
        if(!$estacionamiento) {
            $errores[] = "Debes añadir los estacionamientos";
        }
        if(!$vendedor_id) {
            $errores[] = "Debes seleccionar un vendedor";
        }
        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // Valida que no hayan errores e inserta la consulta
        if(empty($errores)) {
        //Insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id) VALUES( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor_id' ) ";

        //echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado)  {
            echo "Insertado Correctamente";
        }
        }

        
    
    }

    require '../../includes/funciones.php';
    includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Regresar</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>   


        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" ><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Información de Propiedad</legend>

                <label for="habitaciones"> Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej:2" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc"> Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej:2" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento"> Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej:2" min="1" max="9" value="<?php echo $estacionamiento; ?>">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="" >Selecciona el Vendedor</option>
                    <option value="1">Jacinto</option>
                    <option value="2">Daniel</option>
               </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>
    
    <?php includeTemplate('footer');?>