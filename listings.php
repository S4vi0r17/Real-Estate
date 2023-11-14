<?php
require './includes/functions.php';
addTemplate('header');
?>
<main class="container section">
  <h2>Homes and Apartments for Sale</h2>

    <?php

    $limite = 9;

    include './includes/templates/listing.php';

    ?>

</main>
<?php
addTemplate('footer');
?>