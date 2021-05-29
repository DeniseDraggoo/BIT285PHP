<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/image.css">
  <link rel="stylesheet" href="css/typography.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/ratingStars.css">

  <title>Duckie Land</title>
</head>
    
<body>
    <?php
        include ("dbconnect.php");
        $query = "SELECT * FROM duckies WHERE duckie_name = 'Flower-Power'";
        $result = mysqli_query($conn, $query); 
        $row = mysqli_fetch_row($result);
    
        if (isset($_POST["flowerpower_quantity"])) {
            session_start();
            $_SESSION["flowerpower_quantity"] = $_POST["flowerpower_quantity"];
        }
    
    ?>
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
    
<h2>Flowerpower Duckie</h2>
    <div class="duckie_page">
        <img src="images/duck_flowered.jpg" alt="flowerpower duckie">
    </div>
    <div>
        <p  class="duckie_text">Flower power duckie.</p> 
        <p class="duckie_price">$<?php echo $row[2]; ?></p>
        <div class="addToCart_button">
            <form action="flowerpower_duckie.php" method="post">
                <select name="flowerpower_quantity">
                    <option value="">Choose quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            <input type="submit" id="flowerpower_btn" value="Add to cart">
                
            </form>
        </div>
    </div>

</div><!-- content container -->
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/addToCart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>