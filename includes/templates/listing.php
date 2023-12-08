<?php

// Importar la conexión

require 'includes/config/database.php'; // Son relativos de donde se mandan a llamar || index.php de la raiz
$db = conectarDB();

// Consultar la base de datos;
$query = "SELECT * FROM propiedades LIMIT {$limite}";

// Obtener los resultados
$resultado = mysqli_query($db, $query);


?>






<div class="listing-container">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>


        <div class="listing">


            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Listing" />

            <div class="listing-content">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p>
                    <?php echo $propiedad['descripcion']; ?>
                </p>
                <p class="price"><?php echo $propiedad['precio']; ?></p>
                <ul class="feature-icons">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="Bathroom Icon" />
                        <p><?php echo $propiedad['wc']; ?></p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Parking Icon" />
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Bedrooms Icon" />
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>
                <a href="house1.php?id=<?php echo $propiedad['id']; ?>" class="btn-yellow-block"> View Property </a>
            </div>
        </div>

    <?php endwhile; ?>

</div>

<?php
// Cerrar la conexión
mysqli_close($db);
?>