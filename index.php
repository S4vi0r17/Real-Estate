<?php
$home = true;
include './includes/templates/header.php';
?>
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
<section class="section container">
  <h2>Homes and Apartments for Sale</h2>
  <div class="listing-container">
    <div class="listing">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="Listing1" />
      </picture>
      <div class="listing-content">
        <h3>Luxury Lakefront House</h3>
        <p>
          Discover lakeside luxury in these stunning lakefront homes,
          featuring high-end finishes and spacious, elegant interiors.
        </p>
        <p class="price">$5,000,000</p>
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
        <a href="listing.html" class="btn-yellow-block"> View Property </a>
      </div>
    </div>
    <div class="listing">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio2.jpg" alt="Listing2" />
      </picture>
      <div class="listing-content">
        <h3>Luxury Finished House</h3>
        <p>
          Redefine modern living in these meticulously designed homes with
          premium finishes, a testament to sophistication.
        </p>
        <p class="price">$3,000,000</p>
        <ul class="feature-icons">
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="Bathroom Icon" />
            <p>3</p>
          </li>
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Parking Icon" />
            <p>3</p>
          </li>
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Bedrooms Icon" />
            <p>4</p>
          </li>
        </ul>
        <a href="listing.html" class="btn-yellow-block"> View Property </a>
      </div>
    </div>
    <div class="listing">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio3.jpg" alt="Listing1" />
      </picture>
      <div class="listing-content">
        <h3>House with Pool</h3>
        <p>
          Dive into luxury with homes that feature private pools, creating
          your own backyard oasis for relaxation and entertainment.
        </p>
        <p class="price">$4,000,000</p>
        <ul class="feature-icons">
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="Bathroom Icon" />
            <p>4</p>
          </li>
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Parking Icon" />
            <p>2</p>
          </li>
          <li>
            <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Bedrooms Icon" />
            <p>5</p>
          </li>
        </ul>
        <a href="listing.html" class="btn-yellow-block"> View Property </a>
      </div>
    </div>
  </div>

  <div class="align-right">
    <a href="listings.html" class="btn-green">View All</a>
  </div>
</section>
<section class="image-contact">
  <h2>Find Your Dream Home</h2>
  <p>
    Fill out the contact form, and an advisor will get in touch with you
    shortly
  </p>
  <a href="contact.html" class="btn-yellow">Contact Us</a>
</section>

<div class="container section lower-section">
  <section class="blog">
    <h3>Our Blog</h3>
    <article class="blog-entry">
      <div class="image">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="blog1-img" />
        </picture>
      </div>
      <div class="entry-text">
        <a href="blog.html">
          <h4>Rooftop Terrace at Your Home</h4>
          <p class="meta-info">
            Written on: <span>10/20/2023</span> by: <span>Admin</span>
          </p>

          <p>
            Tips for building a rooftop terrace at your home with the best
            materials and cost-saving measures.
          </p>
        </a>
      </div>
    </article>
    <article class="blog-entry">
      <div class="image">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="blog1-img" />
        </picture>
      </div>

      <div class="entry-text">
        <a href="blog.html">
          <h4>Home Decoration Guide</h4>
          <p class="meta-info">
            Written on: <span>10/20/2021</span> by: <span>Admin</span>
          </p>

          <p>
            Maximize space in your home with this guide, learn to combine
            furniture and colors to bring life to your space.
          </p>
        </a>
      </div>
    </article>
  </section>
  <!-- finalizan los articulos del blog -->
  <section class="testimonials">
    <h3>Testimonials</h3>

    <div class="testimonial">
      <blockquote>
        The staff provided excellent service, great attention, and the house
        they offered meets all my expectations.
      </blockquote>
      <p>- Eder Benites</p>
    </div>
  </section>
</div>

<?php
include './includes/templates/footer.php';
?>