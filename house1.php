<?php

$id = $_GET["id"];

$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header("Location: /index.php");
}

// Base de datos
require 'includes\config\database.php';

$db = conectarDB();

// Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = {$id}";
$resultado = mysqli_query($db, $consulta);

if (!$resultado->num_rows) {
  header("Location: /index.php");
}

$propiedad = mysqli_fetch_assoc($resultado); // Todo el contenido del registro

// var_dump($propiedad);


require './includes/functions.php';
addTemplate('header');
?>
<main class="container section content-center">
  <h1><?php echo $propiedad["titulo"] ?></h1>

  <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Property image" />

  <div class="property-summary">
    <p class="price"><?php echo $propiedad["precio"] ?></p>
    <ul class="feature-icons">
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="Bathroom Icon" />
        <p><?php echo $propiedad["wc"] ?></p>
      </li>
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Parking Icon" />
        <p><?php echo $propiedad["estacionamiento"] ?></p>
      </li>
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Bedrooms Icon" />
        <p><?php echo $propiedad["habitaciones"] ?></p>
      </li>
    </ul>
    <p>
      <?php echo $propiedad["descripcion"] ?>
    </p>
    <p>
      Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae.
      In dictum felis et nunc aliquet molestie. Proin tristique commodo
      felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis
      convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem
      dolor non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id
      nisl vel odio semper hendrerit.
    </p>
    <p>
      Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis
      elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna
      nisi fermentum est, a dignissim nisi libero vel est. Donec et
      imperdiet augue. Curabitur malesuada sodales congue. Suspendisse
      potenti. Ut sit amet convallis nisi.
    </p>
  </div>
</main>
<?php

  mysqli_close($db);

  addTemplate('footer');

?>