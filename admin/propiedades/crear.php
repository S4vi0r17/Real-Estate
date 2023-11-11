<?php

// Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

// Consulta para obtener los vendedores 
$cosulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $cosulta);

// var_dump($db);

// Arreglo con mensaje de errores
$errores = [];


$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$Vendedores_id = "";


// Ejeciutar el codigo despues de que el usuario envia el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // echo "<pre>";

    // var_dump($_POST);

    // echo "</pre>";


    $titulo = $_POST["titulo"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $habitaciones = $_POST["habitaciones"];
    $wc = $_POST["wc"];
    $estacionamiento = $_POST["estacionamiento"];
    $Vendedores_id = $_POST["vendedor"];
    $creado = date("Y/m/d");


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


    // echo "<pre>";

    // var_dump($errores);

    // echo "</pre>";

    // Revisar que el arreglo de errores este vacio
    if (empty($errores)) {
        // Insertar en la base de datos

        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, Vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$Vendedores_id')";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // echo "Insertado correctamente";
            // redireccionar al usuario
            header("Location: /Real-Estate/admin/index.php");
        }
    }
}


require '../../includes/functions.php';

addTemplate('header');
?>
<main class="container section">
    <h1>Crear</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/Real-Estate/admin/index.php" class="btn btn-green">Volver</a>

    <form method="POST" action="/Real-Estate/admin/propiedades/crear.php" class="form">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" placeholder="Titulo de la propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" value="<?php echo $precio; ?>" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

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
        <input type="submit" value="Crear Propiedad" class="btn btn-green">
    </form>



</main>
<?php
addTemplate('footer');
?>