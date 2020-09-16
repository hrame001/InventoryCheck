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
    
    <!-- application title-->
    <title>Inventory Check</title>
  </head>
  
<!--Inline CSS for index.html background image only-->
  <style>
    body {
      background-image: url('images/home_background.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
  </style>

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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- product page link -->
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <!-- analystic page link -->
          <li class="nav-item">
            <a class="nav-link" href="analystic.php">Analystic</a>
            <li class="nav-item">
          </li>
          <!-- contact us page link -->
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>

      <!--Logout button-->
      <form class="form-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" name ="logout" type="submit">Logout</button>
      </form>
    </nav>
    <!--Navbar code end here-->



    <!--Login Form start here-->
    <div class="container">

        <div class="row" id ="centerform">
            <div class="col-md-10">
              <!-- login form -->
              <form class="form" method="POST" action="login.php">
                <h1>Login</h1>
                <div class="form-group">
                  <label for="Email">Email address:</label>
                  <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="Password">Password:</label>
                  <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                </div>
                
                <!-- login button -->
                <button type="submit" name = "login" class="btn btn-success">Login</button>
                
                <!-- create account button -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Create Account
                </button>
              </form>
            </div>
        </div>
    </div>
    <!--Login Form end here-->
    
<!-- Modal for create new account start here-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- title -->
        <h4 class="create_account" id="exampleModalLongTitle">Create Account</h4>
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="register.php" method="POST">
          <div class="form-row">
            <!-- first name field -->
            <div class="form-group col-md-6">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>
            <!-- last name field -->
            <div class="form-group col-md-6">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
          </div>
  
          <div class="form-row">
              <!-- email field -->
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name ="email" placeholder="Email">
              </div>
              <!-- password field -->
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="Password">
              </div>

          </div>
            <!-- create your account button -->
          <button type="submit" name="register" class="btn btn-primary">Create your account</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal for create new account ends here-->

  </body>
</html>

