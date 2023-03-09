<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color : #5A8BE1;">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Basic Banking System  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Convertor </a>
        </li>
        
</div>


      </ul>
      
    </div>
  </div>
</nav>



	<div class="container">
        <h2 class="text-center pt-4" style="color : white;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tr>
                <th class="text-center">1</th>
                <th class="text-center">srav</th>
                <th class="text-center">lucky</th>
                <th class="text-center">2000</th>
                <th class="text-center">2023-02-19 07:30:28</th>
            </tr>
            <tr>
                <th class="text-center">2</th>
                <th class="text-center">krish</th>
                <th class="text-center">kallu</th>
                <th class="text-center">700</th>
                <th class="text-center">2023-02-14 09:10:14</th>
            </tr>
            <tr>
                <th class="text-center">3</th>
                <th class="text-center">kallu</th>
                <th class="text-center">srav</th>
                <th class="text-center">1000</th>
                <th class="text-center">2023-02-12 05:31:18</th>
            </tr>
            <tr>
                <th class="text-center">4</th>
                <th class="text-center">Ajay</th>
                <th class="text-center">Baswa</th>
                <th class="text-center">1200</th>
                <th class="text-center">2023-02-12 03:30:04</th>
            </tr>
            <tr>
                <th class="text-center">5</th>
                <th class="text-center">srav</th>
                <th class="text-center">ranji</th>
                <th class="text-center">1800</th>
                <th class="text-center">2023-02-08 04:28:34</th>
            </tr>
            <tr>
                <th class="text-center">6</th>
                <th class="text-center">srav</th>
                <th class="text-center">khanna</th>
                <th class="text-center">1100</th>
                <th class="text-center">2023-02-08 02:30:28</th>
            </tr>
            <tr>
                <th class="text-center">7</th>
                <th class="text-center">kallu</th>
                <th class="text-center">srav</th>
                <th class="text-center">1400</th>
                <th class="text-center">2023-02-07 01:40:18</th>
            </tr>
            <tr>
                <th class="text-center">8</th>
                <th class="text-center">bhima</th>
                <th class="text-center">srav</th>
                <th class="text-center">1200</th>
                <th class="text-center">2023-02-06 02:18:20</th>
            </tr>
            <tr>
                <th class="text-center">9</th>
                <th class="text-center">krish</th>
                <th class="text-center">lucky</th>
                <th class="text-center">2000</th>
                <th class="text-center">2023-02-06 07:30:28</th>
            </tr>
            <tr>
                <th class="text-center">10</th>
                <th class="text-center">srav</th>
                <th class="text-center">lucky</th>
                <th class="text-center">2000</th>
                <th class="text-center">2023-01-29 02:19:07</th>
            </tr>

        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-5">
            <p>MAR 2023 <b>Sravani Baswaraj</b> <br>Spark Foundation</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>