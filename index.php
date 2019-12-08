<!DOCTYPE html>
<html>
  <head>

  <title>Stay Real Estate</title>

<!--Meta Tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="William Webb">
  <!-- william.webdev@outlook.com -->
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">

<!--Links and Imports-->
  <link rel="stylesheet" href="../stylesheet.css" type="text/css">
  <link rel="icon" href="../images/home_2_512_2re_icon.ico" type="image/x-icon" />

 <!--Bootstrap CDN-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </head>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Compressed Foundation CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-float.min.css" integrity="sha256-sP0p6J7SbJGiJ2gkdY1nkVsLgdwiFN2kI370lU+zacQ= sha384-yZLxxcD8nfiSt1qfKJWwHwtkL58WZDTlkBnZN60qr3ZS35+LDsmUF2JHLxdyZ+KU sha512-Z3WbpfWFSsK2dBvoSYZnMvPmxSJUa5cxj3TYlmyj6cq8IXy7iB2nlUk+jjms8gnz4HmpQk/yhRSlRzW7keoSlg==" crossorigin="anonymous">

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <body>
    
    
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
        </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-danger shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="../index.html" class="navbar-brand d-flex align-items-center text-capitalize">
        
        <strong>Stay Real Estate</strong>

      </a>
      <a href="">
      <span id="mail" ><i class="fas fa-envelope"></i></span>
    </a>
    </div>
  </div>
</header>

<main role="main">
  <div id="core">
  <h2>Find your dream home? Contact us below:</h2>
  <form action="sendmail.php" method="post" name="contact_form" id="contact_form">
    <fieldset>
          <legend>Customer Information</legend>
            <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name" required><br>
      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" id="last_name" required><br>
          <label for="email">Email Address:</label>
          <input type="email" name="email" id="email" required><br>
          <label for="verify">Verify Email:</label>
          <input type="email" name="verify" id="verify" required autocomplete="off"><br>
      <label for="phone">Phone Number:</label>
      <input type="tel" name="phone" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="999-999-9999" required><br>
    </fieldset>
    <fieldset>
        <legend>Order Info</legend>
      <label for="subject">Subject:</label>
      <input type="text" name="subject" id="subject" required><br>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" placeholder="I'm interested in seeing the home on 123 Maple St!" required></textarea>
    </fieldset>
    <fieldset id="buttons">
      <legend>Submit</legend>
      <label>&nbsp;</label>
      <input type="submit" id="submit" value="Send Email">
      <input type="reset" id="reset" value="Reset"><br>
    </fieldset>
  </form>
</div>
</main>

<footer class="text-white bg-dark">
  <div class="container">
    <p class="float-right">
      <a class="text-white" href="#" ><i class="fas fa-arrow-up"></i> Back to top</a>
    </p>
    <p>2019 &copy; Stay Real Estate</p>
    <p><i class="fab fa-facebook-square"></i>  <i class="fab fa-twitter-square"></i></p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
  
  </body>
</html>
