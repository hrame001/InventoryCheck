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

<!-- Main body-->
  <body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <img src="images/logo.png" alt="Logo" width="110" height="100">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="product.php">Product<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="analystic.php">Analystic</a>
            </li>
          <li>
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>

      <!--Logout button-->
      <form class="form-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
      
    </nav>
    
    <div class="container">
      <div class="row">
          <div class="col-md-4">
            <!-- view all product button-->
            <div id="allproduct" class="card" style="width: 18rem;">
              <img class="card-img-top" src="images/product.jpg" alt="product image">
                <div  class="card-body">
                  <!-- title -->
                  <h5 class="card-title">All Product</h5>
                  <!-- sub text -->
                  <p class="card-text">The following button will allow you view all the product that are in the databases.</p>
                  <!-- external link to allproduct page -->
                  <a href="allproduct.php" class="btn btn-primary">View all product</a>
                </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <!-- Add product in the database button -->
            <div id="addproduct" class="card" style="width: 18rem;">
              <img class="card-img-top" src="images/addproduct.jpg" alt="product image">
                <div  class="card-body">
                  <!-- title -->
                  <h5 class="card-title">Add Product</h5>
                  <!-- sub text -->
                  <p class="card-text">The following button will allow you to add the product in the databases.</p>
                  <!-- external link to add product page -->
                  <a href="addproduct.php" id="addbutton" class="btn btn-primary">Add Product</a>
                </div>
            </div>
          </div>
      </div>
    </div>
    
  </body>
</html>