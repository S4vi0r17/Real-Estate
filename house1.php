<?php
include './includes/templates/header.php';
?>
<main class="container section content-center">
  <h1>House for Sale in Front of the Forest</h1>
  <picture>
    <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="Property image" />
  </picture>
  <div class="property-summary">
    <p class="price">$4,000,000</p>
    <ul class="feature-icons">
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="Bathroom Icon" />
        <p>4</p>
      </li>
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Parking Icon" />
        <p>3</p>
      </li>
      <li>
        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Bedrooms Icon" />
        <p>5</p>
      </li>
    </ul>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum facilis
      saepe corporis, nihil eius expedita repellendus possimus maiores.
      Rerum tempore totam quis voluptatem earum error fuga tenetur repellat
      quam voluptates.
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
include './includes/templates/footer.php';
?>