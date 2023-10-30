<?php
require './includes/functions.php';
addTemplate('header');
?>
<main class="container section">
  <h1>About Us</h1>
  <div class="about-content">
    <div class="image">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/nosotros.jpg" alt="about us" />
      </picture>
    </div>
    <div class="about-text">
      <blockquote>25 Years of Experience</blockquote>

      <p>
        Proin consequat viverra sapien, malesuada tempor tortor feugiat
        vitae. In dictum felis et nunc aliquet molestie. Proin tristique
        commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh
        quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis
        lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi.
        Proin id nisl vel odio semper hendrerit.
      </p>
      <p>
        Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis
        elit suscipit molestie. Sed condimentum, erat at tempor finibus,
        urna nisi fermentum est, a dignissim nisi libero vel est. Donec et
        imperdiet augue. Curabitur malesuada sodales congue. Suspendisse
        potenti. Ut sit amet convallis nisi.
      </p>
    </div>
  </div>
</main>
<main class="container section">
  <h1>More About Us</h1>
  <div class="us-icons">
    <div class="icon">
      <img src="build/img/icono1.svg" alt="Security Icon" loading="lazy" />
      <h3>Security</h3>
      <p>
        We provide security with the utmost priority. Our properties ensure
        safety and peace of mind.
      </p>
    </div>
    <div class="icon">
      <img src="build/img/icono2.svg" alt="Price Icon" loading="lazy" />
      <h3>Price</h3>
      <p>
        Our properties come with affordable prices, offering you the best
        value for your investment.
      </p>
    </div>
    <div class="icon">
      <img src="build/img/icono3.svg" alt="On Time Icon" loading="lazy" />
      <h3>On Time</h3>
      <p>
        We deliver on time and make sure your dream home is available when
        you need it.
      </p>
    </div>
  </div>
</main>
<?php
addTemplate('footer');
?>