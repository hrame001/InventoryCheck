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



    <!-- The following button is to go back to allproduct page to search-->
    <div style="padding-top: 20px; padding-bottom: 20px;">
        <button type="button" class="btn btn-primary" onclick="location.href='allproduct.php'">New search</button>
    </div>
<!-- Source -->
<!-- https://www.php.net/manual/en/mysqli-result.fetch-assoc.php -->
<!-- The following table with php will retriew data from the database and will show all the data that has been added via add product button-->
<div class="table-responsive-lg">
     <table class="table table-striped">
        <thead>
          <!-- table title name in row wise -->
          <tr>
            <th scope="col">Item Number</th>
            <th scope="col">Item Name</th>
            <th scope="col">Wholesale Price</th>
            <th scope="col">Price </th>
            <th scope="col">Quantity </th>
            <th scope="col">Sold </th>
            <th scope="col"> Remaining Quantity </th>
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
                // conditional statement to get the word for the search 
                  if(isset($_GET['word'])){

                  $query = $connection->prepare("SELECT itemnumber, itemname, wholesale_price, price, quantity, sold FROM addproduct WHERE itemnumber LIKE CONCAT('%',?,'%') OR itemname LIKE CONCAT('%',?,'%')");

                  //souce: https://www.php.net/manual/en/mysqli-stmt.get-result.php
                  $query->bind_param("ss", $word, $word);
                
                  $word = $_GET['word'];

                  //execute the query
                  $query->execute();

                  //show the result for the query
                  $result = $query->get_result();

                  }

                  // The following while loop will show the data in a row
                  while ($row = $result->fetch_assoc()) {

            ?>

            <!-- show the result -->
          <tr>
              <td> <?php echo $row['itemnumber']; ?></td>
              <td> <?php echo $row['itemname']; ?></td>
              <td> <span>&#163;</span><?php echo $row['wholesale_price']; ?></td>
              <td> <span>&#163;</span><?php echo $row['price']; ?></td>
              <td> <?php echo $row['quantity']; ?></td>
              <td> <?php echo $row['sold']; ?></td>
              <td> <?php echo $row["quantity"] - $row["sold"]; ?></td>
          </tr>

        </thead>

        <?php
              
            }
            //close the connection
            $query->close();
          }

        ?>
      </table>
</div>
    
    
  </body>

</html>
