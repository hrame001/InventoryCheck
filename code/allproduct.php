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
              <li class="nav-item active">
                <a class="nav-link" href="allproduct.php">View all Product<span class="sr-only">(current)</span></a>
              </li>
              <!-- add product link page -->
              <li class="nav-item ">
                <a class="nav-link" href="addproduct.php">Add product</a>
              </li>
            </ul>
          </div>
     </nav>


    <!-- Search form and button -->
    <form class="form-inline" id="search" action="search.php" method="GET">
        <input class="form-control mr-sm-2" type="search" name="word" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

<!-- Source -->
<!-- https://www.php.net/manual/en/mysqli-result.fetch-assoc.php -->
<!-- The following table with php will retriew data from the database and will show all the data that has been added via add product button-->
<div class="table-responsive-lg">
  <!-- table starts here -->
     <table class="table table-striped">
        <thead>
          <!-- table names -->
          <tr>
            <th scope="col">Item Number</th>
            <th scope="col">Item Name</th>
            <th scope="col">Wholesale Price</th>
            <th scope="col">Price </th>
            <th scope="col">Quantity </th>
            <th scope="col">Sold </th>
            <th scope="col">Remaining Quantity </th>
            <th scope="col">Edit </th>
            <th scope="col">Delete </th>
          </tr>

  <?php
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
              else{
                  //php query
                  $query = "SELECT * FROM addproduct ORDER BY time DESC";
                  
                  //execute the query
                  $result = $connection->query($query);

              }

              //condition to show the dara 
              if ($result->num_rows > 0) {

                  // The following while loop will show the data in a row
                  while($row = $result->fetch_assoc()) {


            ?>

            <!-- show the results  in a row format-->
          <tr>
              <td> <?php echo $row['itemnumber']; ?></td>
              <td> <?php echo $row['itemname']; ?></td>
              <td> <span>&#163;</span><?php echo $row['wholesale_price']; ?></td>
              <td> <span>&#163;</span><?php echo $row['price']; ?></td>
              <td> <?php echo $row['quantity']; ?></td>
              <td> <?php echo $row['sold']; ?></td>

              <td><?php echo $row["quantity"] - $row["sold"]; ?>
                
              </td>
              <!-- edit button -->
              <td><a href="edit.php?edit=<?php echo $row['itemnumber'];?>" class="btn btn-primary">Edit</a></td>

              <!-- delete button -->
              <td><a href="delete.php?delete=<?php echo $row['itemnumber'];?>" onclick="myFunction()" class="btn btn-danger confirmation">Delete</a></td>
          </tr>

        </thead>

        <?php
            }
          }
          else { 
            //message if there is no data in the database 
              echo "There are no data in the database"; 
            }

            // Close the connection
            $connection->close();

        ?>
      </table>
      <!-- table ends here -->

</div>  
  
  </body>

</html>