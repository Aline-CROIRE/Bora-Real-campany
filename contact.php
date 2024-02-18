<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <title>My Web Page</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="Index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
<body>
  <div class="container">
    <h1>Contact Us</h1>

    <div class="working-hours">
      <h2>Our Working Hours:</h2>
      <p>Monday - Friday: 9:00am - 6:00pm</p>
    </div>
    <img src="web.jpg" alt="home Image"style="display: block;margin: 0 auto;" height="230px"width="250">
    <br>
    <div class="contact-info">
      <h2>How Can We Assist You?</h2>
      <p>Bora Real Company Ltd provides a range of real estate services including property valuation, real estate consultancy, land surveying, project and property rights, property agency, and business planning. Please feel free to contact us during our working hours for any inquiries or assistance you may need.</p>
      <p>We are committed to providing high-quality services and prompt responses. You can reach out to us using the contact form below or contact us directly through phone, WhatsApp, or our social media channels. We look forward to hearing from you!</p>
    </div>

    <div class="contact-form">
      <h2>Contact Form</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="3" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>

    <div class="contact-details">
      <h2>Contact Information</h2>
      <p><strong>Address:</strong> Kigali, Rwanda</p>
      <p><strong>Phone:</strong></p>
      <ul>
        <li>0784090000</li>
        <li>0784675555</li>
        <li>0785385555</li>
        <li>0783888000</li>
      </ul>
      <p><strong>Email:</strong> borareal@gmail.com</p>
      <p><strong>WhatsApp:</strong> <a href="https://wa.me/0790635120">0790635120</a></p>
      <p><strong>Social Media:</strong></p>
      <ul class="social-media">
        <li><a href="https://www.facebook.com/borarealproperty" target="borarealproperty"><img src="R.png" alt="Facebook">Bora Realproperty</a></li>
        <li><a href="https://www.instagram.com/borarealproperty" target="borarealproperty"><img src="OIP.jpg" alt="Instagram">Bora_Realproperty</a></li>
      </ul>
    </div>

    <div class="footer">
      <p>© 2023 Bora Real Company Ltd. All rights reserved.</p>
    </div>
  </div>
</body>
</html>