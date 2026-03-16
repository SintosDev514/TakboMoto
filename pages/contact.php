<?php
$error = "";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Name</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="NavStyle">
    <div>
      <img src="../images/logo.png" alt="logo" class="logo" />
    </div>
    <nav>
      <a href="../index.html">Home</a>
      <a href="../index.html#background2">Partners</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contacts</a>
      <a href="services.html">Services</a>
    </nav>
    <button id="LoginToggle">Login</button>
    <button id="SignUpToggle">Sign Up</button>
  </div>

  <main>
    <section id="contactSec">
      <h2>Contact <span class="moto-white">Us</span></h2>
      <div id="cards">
        <div class="card">
          <h2 class="card-title">Get in <span class="moto-white">Touch</span></h2>

          <form action="process.php" method="POST">

            <div class="label">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" placeholder="Enter your name"  />
            </div>

            <div class="label">
              <label for="email">Email</label>
              <input id="msgemail" name="email" type="email" placeholder="Enter your email"  />
            </div>

            <div class="label">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Write your message" ></textarea>
            </div>

            <br>

            <button id="msgBtn" type="submit">Send Email</button>

          </form>
          <br>
         <?php if (!empty($error)) { ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php } ?>
        </div>

        <div class="card">
          <h2 class="card-title">Our Office <span class="moto-white">Location</span></h2>
          <iframe
            src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sph!4v1771650199547!5m2!1sen!2sph!6m8!1m7!1sbPMoxim6gfaT7UTbFe2Dyw!2m2!1d12.07465087650321!2d124.5609470917673!3f271.05132436782645!4f-0.8410462975510455!5f0.7820865974627469"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 TakboMoto. All rights reserved.</p>
  </footer>

   <script src="../navscript.js"></script>
   <script src="../script.js"></script>

</body>

</html>