<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/image.css">
  <link rel="stylesheet" href="css/typography.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/ratingStars.css">
  <title>Duckie Land</title>
</head>
<body>
<div class="container">

<section class="header" id="header">
    <header>
        <h1>Duckie Land</h1>
        <form action="cart.php" method="post">
            <div class="cart_button">
            <input type="submit" value="Cart">
            </div>
        </form>
    </header>
</section>
    
<h2>Rubber duckies available for purchase</h2>
    


    
<!--     ****** API ******


    http://data.fixer.io/api/latest?access_key=07da728c58624fae0d1ba138ad5acf88
    
    http://data.fixer.io/api/convert
    ? access_key = API_KEY
    & from = GBP
    & to = JPY
    & amount = 25
    
    
    {
    "success": true,
    "query": {
        "from": "GBP",
        "to": "JPY",
        "amount": 25
    },
    "info": {
        "timestamp": 1519328414,
        "rate": 148.972231
    }
}

-->   
    
<?php /*
// set API Endpoint and API key 
$endpoint = 'latest';
$access_key = 'API_KEY';

// Initialize CURL:
//$ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$07da728c58624fae0d1ba138ad5acf88.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
echo $exchangeRates['rates']['GBP'];    
  */  
    

        include ("dbconnect.php");
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Flower-Power'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result);    
    
?>  
    
    
<section class="content" id="duckie_list">
    <div class="row py-3">
        <div class="col-3 offset-1">
            <img src="images/duck_flowered.jpg" alt="Duckie with flowers on body">
        </div>
        <div class="col-4">
            <p><a href="flowerpower_duckie.php">Flower-Power Duckie </a><br> $<?php echo $row[2];?></p>
        </div>
    </div>
    
    <?php 
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Graduate'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result); 
    ?>   
    <div class="row py-3">
        <div class="col-3 offset-1">
            <img src="images/duck_graduate.jpg" alt="Graduate duckie">
        </div>
        <div class="col-4">
            <p><a href="graduate_duckie.php">Graduate Duckie </a><br> $<?php echo $row[2];?></p>
        </div>
    </div>
    
    <?php 
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Firefighter'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result); 
    ?>   
    
    <div class="row py-3">
        <div class="col-3 offset-1">
            <a href="firefighter_duckie.php"><img src="images/duck_firefighter.jpg" alt="Duckie with firefighter uniform"></a>
        </div>
        <div class="col-4">
            <p><a href="firefighter_duckie.php"> Firefighter Duckie</a><br>$<?php echo $row[2];?></p>
        </div>
    </div>
    
    <?php 
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Surgeon_Nurse'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result); 
    ?>   
    
    <div class="row py-3">
        <div class="col-3 offset-1">
            <img src="images/duck_surgeon_nurse.jpg" alt="Surgeon and nurse duckies">
        </div>
        <div class="col-4">
            <p><a href="surgeonnurse_duckie.php">Surgeon and Nurse Duckies </a><br> $<?php echo $row[2];?></p>
        </div>
    </div>
    
    <?php 
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Unicorn'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result); 
    ?>   
    
    <div class="row py-3">
        <div class="col-3 offset-1">
            <img src="images/duck_unicorns.jpg" alt="Unicorn duckies">
        </div>
        <div class="col-4">
            <p><a href="unicorn_duckie.php">Unicorn Duckie </a><br> $<?php echo $row[2];?></p>
        </div>
    </div>
    

    
</section>

</div><!-- content container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>