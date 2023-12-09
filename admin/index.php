<?php





// Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();


// Escritura de la consulta(QUERY)
$consulta = "SELECT * FROM propiedades";


// Ejecutar la consulta
$resultado = mysqli_query($db, $consulta);


// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

// exit;


// Muestra el mensaje condicional
$mensaje = $_GET["mensaje"] ?? null; // Si no existe mensaje, asignar null


if($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id) {
        // Eliminar el archivo
        $consulta = "SELECT imagen FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($db, $consulta);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink("../imagenes/" . $propiedad["imagen"]);

        // Eliminar la propiedad
        $consulta = "DELETE FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($db, $consulta);

        if($resultado) {
            header("Location: /admin/index.php?mensaje=3");
        }
    }
}


require '../includes/functions.php';
addTemplate('header');
?>
<main class="container section">
    <h1>Administrador Real Estate</h1>

    <?php if (intval($mensaje) === 1) : ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    
    <?php elseif (intval($mensaje) === 2) : ?>
        <p class="alerta exito">Anuncio actualizado correctamente</p>

    <?php elseif (intval($mensaje) === 3) : ?>
        <p class="alerta exito">Anuncio eliminado correctamente</p>
        
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="btn btn-green">Nueva propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>id</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody> <!-- muestra los resultados de la consulta -->

            <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?php echo $propiedad["id"]; ?></td>
                    <td><?php echo $propiedad["titulo"]; ?></td>
                    <td><img src="\imagenes\<?php echo $propiedad["imagen"]; ?>" class="imagen-tabla" alt="img"></td>
                    <td>$<?php echo $propiedad["precio"]; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
                            <input type="submit" class="btn-red-block w-100" value="Eliminar" />

                        </form>
                        <a 
                        href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad["id"]; ?>" 
                        class="btn-green-block">Actualizar</a>
                    </td>
                <?php endwhile; ?>

        </tbody>
    </table>
</main>
<?php

// Cerrar la conexion(opcional)
mysqli_close($db);

addTemplate('footer');
?>