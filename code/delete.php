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
      else {
            //conditional statement to delete the record from the database
            if(isset($_GET['delete'])){

              // get the id from itemnumber
              $itemnumber = $_GET['delete'];

              // run the query to delete the record 
              $query = "DELETE FROM `addproduct` WHERE itemnumber = $itemnumber";

              //execute the query
              mysqli_query($connection, $query);

              //going back to the same page when the record is deleted
              header('location: allproduct.php');

            }
      }     
      // Close the connection
      $connection->close();
?>











