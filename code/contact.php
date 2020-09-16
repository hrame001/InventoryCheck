<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Connect the CSS file to html-->
    <link rel="stylesheet" href="styles.css">
    
    <!--Favicon-->
    <link rel='icon' href='images/favicon.png' type='favicon'>

    <!--Link jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Link JavaScript to external file-->
    <script src="contact.js"></script>
    
    <!-- application title-->
    <title>Inventory Check</title>
  </head>

<!-- Main body-->
  <body>
    <!--Navbar code start here-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <img src="images/logo.png" alt="Logo" width="110" height="100">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- home page link -->
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- product page link -->
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <!-- analystic page link -->
          <li class="nav-item">
            <a class="nav-link" href="analystic.php">Analystic</a>
          </li>
          <!-- contact us page link -->
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact us<span class="sr-only">(current)</span></a>
          </li>

        </ul>
      </div>

      <!--Logout button-->
      <form class="form-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" name ="logout" type="submit">Logout</button>
      </form>
    </nav>
    <!--Navbar code end here-->


    <!-- Start of contact map-->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.835656807734!2d0.0671165338879542!3d51.55291247964263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cf41af309fd%3A0x101b71cadec3f6c1!2sLondon+E8+2AT!5e0!3m2!1sen!2suk!4v1514651244467" allowfullscreen></iframe><!-- Google map with my current home waypoint -->
    </div>
    <!-- End of contact map-->

    <!-- Start of contact form-->

    <div class="container">
        <h2> GET IN CONTACT</h2>
        <!-- Title of the page-->
        <form id="form">
            <!-- Contact form-->
            <div class="form-group col-md-6" >
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <!-- user email -->

            <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <!-- Subject box-->

            <!-- message field -->
            <div class="form-group col-md-6">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-6">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            <!-- Submit button-->
        </form>
    </div>

    <!-- End of contact form-->

  </body>
</html>

