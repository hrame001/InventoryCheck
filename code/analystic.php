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

            // select the query 
            $query = "SELECT * FROM addproduct ORDER BY sold ASC";
            
            // execute the query
            $result = mysqli_query($connection, $query);  


            //set up the php query to do the calculation
                  $sum = "SELECT SUM(`wholesale_price` *`quantity`)  AS count FROM addproduct";

                  //set up the php query to do the calculation
                  $sum2 = "SELECT SUM(`price` *`quantity`)  AS count2 FROM addproduct";

                  //set up the php query to do the calculation
                  $sum3 = "SELECT SUM(`price` *`sold`) AS count3 FROM addproduct";


                  //execute the query
                  $result1 = $connection->query($sum);
                  $result2 = $connection->query($sum2);
                  $result3 = $connection->query($sum3);


                  //fetch the data from the php
                  $row = $result1->fetch_assoc();
                  $row2 = $result2->fetch_assoc();
                  $row3 = $result3->fetch_assoc();

                  //go back to the query tocalculate the query
                  $sum = $row['count'];
                  $sum2 = $row2['count2'];
                  $sum3 = $row3['count3'];

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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
    <!-- source: https://developers.google.com/chart/interactive/docs/gallery/columnchart -->
    <!-- I have got the following code from google chart -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      // function for drawchart
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['itemname','sold'], 

          <?php 

            // conditional statement to get the result of sold item
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result)){

                  //display a message
                  echo "['".$row['itemname']."','".$row['sold']."'],";
                }
            }

          ?>
        ]);

        // give a title to the chart
        var options = {
          chart: {
            title: '1. Chart shows the number of sold time, ordered by ascending',
          }
        };

        // show the graph in column wise
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


    <script type="text/javascript">
              google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Result');
        data.addRows([
          ['Total cost from wholesale product', <?php echo number_format($sum , 2);?>],
          ['Total product price in store ',   <?php echo number_format($sum2 , 2);?>],
          ['Profit',   <?php echo number_format($sum2 - $sum,2);?>],
          ['Total sale on sold item',   <?php echo number_format($sum3, 2);?>]
        ]);

        //<span>&#163;</span>

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>

  </head>

<!-- Main body-->
  <body>

    <!-- navigation bar  -->
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
          <li class="nav-item active">
            <a class="nav-link" href="analystic.php">Analystic <span class="sr-only">(current)</span></a>
            </li>
          <li>
            <!-- contact us page link -->
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>
      
      <!--Logout button-->
      <form class="form-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </nav>

    <!-- size of the chart -->
    <div id="columnchart_material" style="width: 1200px; height: 500px; padding-top: 30px; padding-left: 30px;"></div>

    <h5 style="padding: 30px;">2. The following table will show the total cost from wholesale price, in store price, profit between wholesale product/instore and total sale on sold item.</h5>
    <div id="table_div" style="width: 800px; height: 300px; padding:30px;"></div>

  </body>
</html>