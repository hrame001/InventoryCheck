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

    <body>
    
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
            // conditional statement for inserting the record
                if(isset($_POST['submit'])){

                    $itemnumber = $_POST['itemnumber'];
                    $itemname = $_POST['itemname'];
                    $wholesale_price = $_POST['wholesale_price'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $sold = $_POST['sold'];

                    // the following command will insert the data in addproduct table.
                    $query = "INSERT INTO addproduct (itemnumber, itemname, wholesale_price, price,quantity, sold)
                    values ('$itemnumber','$itemname', '$wholesale_price', '$price', '$quantity', '$sold')";

                    mysqli_query($connection, $query);

                    //JavaScript alert dialog box
                    echo '<script language="javascript">';
                    echo 'alert("You have successfully inserted new record")';
                    echo '</script>';  

                }
                else {
                    
                    //show message if their is an error in the server/database
                    echo "Error: ". $sql ."<br>". $connection->error;
                }
          }     
          // Close the connection
          $connection->close();
    ?>

    <!-- The following button is to go back to addproduct page to add more-->
    <div style="padding-top: 20px;">
        <button type="button" class="btn btn-primary" onclick="location.href='addproduct.php'">Click here to add more product</button>
    </div>

    </body>
</html>
