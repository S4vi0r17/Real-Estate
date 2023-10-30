<?php
include './includes/templates/header.php';
?>
<main class="container section">
  <h1>Contact</h1>
  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpg" />
    <img loading="lazy" src="build/img/destacada3.jpg" alt="contact image" />
  </picture>
  <h2>Fill out the Contact Form</h2>
  <form action="" class="form">
    <fieldset>
      <legend>Personal Information</legend>

      <label for="name">Name:</label>
      <input type="text" id="name" placeholder="Your Name" />

      <label for="email">Email:</label>
      <input type="email" id="email" placeholder="Your Email" />

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" placeholder="Your Phone" />

      <label for="message">Message:</label>
      <textarea id="message" placeholder="Your Message (e.g., questions or comments)"></textarea>
    </fieldset>
    <fieldset>
      <legend>Property Information</legend>

      <label for="options">SELL OR BUY:</label>
      <select name="options" id="options">
        <option value="" disabled selected>-- Select --</option>
        <option value="Sell">Sell</option>
        <option value="Buy">Buy</option>
      </select>
      <label for="budget">PRICE OR BUDGET:</label>
      <input type="number" id="budget" placeholder="Your Price or Budget" />
    </fieldset>
    <fieldset>
      <legend>Contact Preferences</legend>
      <p>How would you prefer to be contacted?</p>
      <div class="contact-options">
        <label for="contact-phone">
          <input name="contact-method" type="radio" id="contact-phone" value="phone" />
          <p>Phone</p>
        </label>

        <label for="contact-email">
          <input name="contact-method" type="radio" id="contact-email" value="email" />
          <p>Email</p>
        </label>
      </div>

      <p>If you chose phone, select the date and time</p>
      <label for="date">DATE:</label>
      <input type="date" id="date" />

      <label for="time">TIME:</label>
      <input type="time" id="time" min="09:00" max="18:00" />
    </fieldset>
    <input type="submit" value="Send" class="btn-green" />
  </form>
</main>
<?php
include './includes/templates/footer.php';
?>