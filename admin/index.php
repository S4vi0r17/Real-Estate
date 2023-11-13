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


require '../includes/functions.php';
addTemplate('header');
?>
<main class="container section">
    <h1>Administrador Real Estate</h1>

    <?php if (intval($mensaje) === 1) : ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif; ?>


    <a href="/Real-Estate/admin/propiedades/crear.php" class="btn btn-green">Nueva propiedad</a>

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
                    <td><img src="\Real-Estate\imagenes\<?php echo $propiedad["imagen"]; ?>" class="imagen-tabla" alt="img"></td>
                    <td>$<?php echo $propiedad["precio"]; ?></td>
                    <td>
                        <a href="" class="btn-red-block">Eliminar</a>
                        <a href="" class="btn-green-block">Actualizar</a>
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