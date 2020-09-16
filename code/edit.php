<?php
        //https://stackoverflow.com/questions/30427891/href-html-button-inside-php
          //the following will establising the connection to the server
          $database_host = "localhost";
          $database_username = "root";
          $database_password = "";
          $database_name = "Inventory_check";
                  
          // Create the connection
          $connection = new mysqli ($database_host, $database_username, $database_password, $database_name);

          //check the connection
          if (mysqli_connect_error()){
                die('Connection Error ('. mysqli_connect_errno() .') '
                .  mysqli_connect_error());
          }
          else {  
                //Source="https://www.youtube.com/watch?v=6y6e5gHAtbo";
                // get the id for edit record from itemnumber
                $itemnumber = $_GET['edit'];
                // local variable
                $itemname ="";
                $wholesale_price ="";
                $price ="";
                $quantity ="";

                //select the query 
                $query = "SELECT * FROM addproduct WHERE itemnumber = $itemnumber";
                //execute the query
                $result = $connection->query($query);
                
                // conditional statement to get the record from the database
                while($row = mysqli_fetch_array($result)){
                    $itemname = $row["itemname"];
                    $wholesale_price = $row["wholesale_price"];
                    $price = $row["price"];
                    $quantity = $row["quantity"];
                    $sold = $row["sold"];

                }

                //update the record once it has been changed 
              if(isset($_POST['update'])){

                      $itemnumber = $_GET['edit'];
                      $itemname = $_POST['itemname'];
                      $wholesale_price = $_POST['wholesale_price'];
                      $price = $_POST['price'];
                      $quantity = $_POST['quantity'];
                      $sold = $_POST["sold"];


                      // the following command will insert the data in addproduct table.
                      $query = "UPDATE addproduct SET itemnumber = '$itemnumber', itemname= '$itemname', wholesale_price = '$wholesale_price', price = '$price', quantity = '$quantity',sold = '$sold' WHERE itemnumber = $itemnumber";

                      //execute the query
                      mysqli_query($connection, $query);

                      //once update go back to all product page 
                      header('location: allproduct.php');  

                }

          }
               
          // Close the connection
          $connection->close();
    ?>


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
    <!--edit product form-->
    <form method="POST">
        <div class="container" id="productform">
          <!-- title -->
            <h3>Edit Product:</h3>
            <div class="row">
                <!-- item number field -->
                <div class="col-md-6" id="formrow">
                    <label for="itemnumber">Item Number</label>
                    <input type="number" class="form-control" maxlength="6" name="itemnumber" placeholder="Item Number" value="<?php echo $itemnumber; ?>">
                </div>
                
                <!-- item name field -->
                <div class="col-md-6" id="formrow">
                    <label for="itemname">Item Name</label>
                    <input type="text" class="form-control" name="itemname" placeholder="Item Name" value="<?php echo $itemname; ?>">
                </div>
                
                <!-- wholesale price field -->
                <div class="col-md-6" id="formrow">
                    <label for="wholesale_price">Wholesale Price</label>
                    <input type="text" class="form-control" name="wholesale_price" placeholder="Wholesale Price" value="<?php echo $wholesale_price; ?>">
                </div>

                <!-- price field -->
                <div class="col-md-6" id="formrow">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>">
                </div>
                
                <!-- quantity field -->
                <div class="col-md-6" id="formrow">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" name="quantity"  placeholder="Quantity" value="<?php echo $quantity; ?>"> 
                </div>

                <!-- sold field -->
                <div class="col-md-6" id="formrow">
                    <label for="sold">Sold</label>
                    <input type="number" class="form-control" name="sold"  placeholder="Sold" value="<?php echo $sold; ?>"> 
                </div>
                
                <!-- update product button -->
                <div class="col-md-12">
                    <button type="submit" name="update" id="add" class="btn btn-primary">Update Product</button>
                </div>
            </div>
        </div>
    </form>
    <!-- edit product ends here-->
  </body>
</html>







