<?php

// echo "<pre>";

// var_dump($_GET);

// echo "</pre>";


// Validar que el id sea un entero
$id = $_GET["id"];

$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /Real-Estate/admin/index.php");
}

var_dump($id);


// Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

// Obetener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = {$id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado); // No hay problemas si se mezclan las variables porque...

// echo "<pre>";

// var_dump($propiedad);

// echo "</pre>";





// Consulta para obtener los vendedores 
$cosulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $cosulta);

// var_dump($db);

// Arreglo con mensaje de errores
$errores = [];


$titulo = $propiedad["titulo"];
$precio = $propiedad["precio"];
$descripcion = $propiedad["descripcion"];
$habitaciones = $propiedad["habitaciones"];
$wc = $propiedad["wc"];
$estacionamiento = $propiedad["estacionamiento"];
$Vendedores_id = $propiedad["Vendedores_id"];
$imagenPropiedad = $propiedad["imagen"];


// Ejeciutar el codigo despues de que el usuario envia el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // echo "<pre>";

    // var_dump($_POST);

    // echo "</pre>";

    // echo "<pre>";

    // var_dump($_FILES);

    // echo "</pre>";



    $titulo = mysqli_real_escape_string($db,  $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
    $Vendedores_id = mysqli_real_escape_string($db, $_POST["vendedor"]);
    $creado = date("Y/m/d");


    // Asignar files hacia una variable
    $imagen = $_FILES["imagen"];


    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripcion de al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "Debes añadir un numero de habitaciones";
    }
    if (!$wc) {
        $errores[] = "Debes añadir un numero de baños";
    }
    if (!$estacionamiento) {
        $errores[] = "Debes añadir un numero de estacionamientos";
    }
    if (!$Vendedores_id) {
        $errores[] = "Debes añadir un vendedor";
    }

    // Validar por tamaño (1mb maximo)
    $medida = 1000 * 1000; // 1mb
    if ($imagen["size"] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    // echo "<pre>";

    // var_dump($errores);

    // echo "</pre>";

    // Revisar que el arreglo de errores este vacio
    if (empty($errores)) {


        // Subida de archivos
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        
        $nombreImagen = "";

        if ($imagen["name"]) {
            // Eliminar la imagen previa
            unlink($carpetaImagenes . $propiedad["imagen"]);


            // Extraer la extension de la imagen
            $extensionImagen = explode("/", $imagen["type"]);


            // Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . "." . $extensionImagen[1];

            // Subir la imagen
            move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);
        }else{
            $nombreImagen = $propiedad["imagen"];
        }

        


        // Insertar en la base de datos

        $query = "UPDATE propiedades SET titulo = '{$titulo}', precio = '{$precio}', imagen = '{$nombreImagen}', descripcion = '{$descripcion}', habitaciones = {$habitaciones}, wc = {$wc}, estacionamiento = {$estacionamiento}, Vendedores_id = {$Vendedores_id} WHERE id = {$id}";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // echo "Insertado correctamente";
            // redireccionar al usuario
            header("Location: /Real-Estate/admin/index.php?mensaje=2");
        }
    }
}


require '../../includes/functions.php';

addTemplate('header');
?>
<main class="container section">
    <h1>Actualizar Propiedad</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/Real-Estate/admin/index.php" class="btn btn-green">Volver</a>
    <!-- enctype="multipart/form-data" para archivos -->
    <form method="POST" class="form" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" placeholder="Titulo de la propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" value="<?php echo $precio; ?>" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <img class="imagen-update" src="/Real-Estate/imagenes/<?php echo $imagenPropiedad; ?>" alt="Imagen de la propiedad" class="imagen-small">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion de la propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" value="<?php echo $habitaciones; ?>" name="habitaciones" id="habitaciones" placeholder="Eg. 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" value="<?php echo $wc; ?>" name="wc" id="wc" placeholder="Eg. 4" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="estacionamiento" value="<?php echo $estacionamiento; ?>" name="estacionamiento" id="estacionamiento" placeholder="Eg. 2" min="0" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="">
                <option value="0" disabled selected>-- Seleccione --</option>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?> <!-- fetch assoc trae un arreglo asociativo -->
                    <option <?php echo $Vendedores_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"] . " " . $row["apellido"]; ?></option>
                <?php endwhile; ?>
            </select>

        </fieldset>
        <input type="submit" value="Actualizar Propiedad" class="btn btn-green">
    </form>



</main>
<?php
addTemplate('footer');
?>