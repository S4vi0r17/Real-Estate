<?php

// Base de datos

require '../../includes/config/database.php';

$db = conectarDB();

// var_dump($db);

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

    // Insertar en la base de datos

    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, Vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$Vendedores_id')";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        echo "Insertado correctamente";
    }
}


require '../../includes/functions.php';

addTemplate('header');
?>
<main class="container section">
    <h1>Crear</h1>

    <a href="/Real-Estate/admin/index.php" class="btn btn-green">Volver</a>

    <form method="POST" action="/Real-Estate/admin/propiedades/crear.php" class="form">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion de la propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Eg. 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" name="wc" id="wc" placeholder="Eg. 4" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="Eg. 2" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="">
                <option value="1">Nacho</option>
                <option value="2">Viviana</option>
            </select>

        </fieldset>
        <input type="submit" value="Crear Propiedad" class="btn btn-green">
    </form>

</main>
<?php
addTemplate('footer');
?>