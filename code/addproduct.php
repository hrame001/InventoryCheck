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
      <!-- navbar start here-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <img src="images/logo.png" alt="Logo" width="110" height="100">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- product link page-->
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <!-- view all product link page -->
          <li class="nav-item ">
            <a class="nav-link" href="allproduct.php">View all Product</a>
          </li>
          <!-- add product link page -->
          <li class="nav-item active">
            <a class="nav-link" href="addproduct.php">Add product</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar ends here-->
    
    <!--add product container-->
    <!-- Form to add the product in the database -->
    <form method="POST" action="insertitems.php">
        <div class="container" id="productform">
            <h3>Add Product:</h3>
            <div class="row">
                
                <!-- add item number field -->
                <div class="col-md-6" id="formrow">
                    <label for="itemnumber">Item Number</label>
                    <input type="number" class="form-control" maxlength="6" name="itemnumber" placeholder="Item Number" required="required">
                </div>
                
                <!-- add item name field -->
                <div class="col-md-6" id="formrow">
                    <label for="itemname">Item Name</label>
                    <input type="text" class="form-control" name="itemname" placeholder="Item Name" required="required">
                </div>
                
                <!-- add wholesale price field -->
                <div class="col-md-6" id="formrow">
                    <label for="wholesale_price">Wholesale Price</label>
                    <input type="text" class="form-control" name="wholesale_price" placeholder="Wholesale Price" required="required">
                </div>

                <!-- add price field -->
                <div class="col-md-6" id="formrow">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Price" required="required">
                </div>
                
                <!-- add quantity field -->
                <div class="col-md-6" id="formrow">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" name="quantity" placeholder="Quantity" required="required"> 
                </div>

                <!-- add  sold field-->
                <div class="col-md-6" id="formrow">
                    <label for="sold">Sold</label>
                    <input type="number" class="form-control" name="sold" placeholder="Sold" required="required"> 
                </div>

                <!-- add product button -->
                <div class="col-md-12">
                    <button type="submit" name="submit" id="add" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Add product ends here-->

  </body>
</html>