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
    <style>
        table {
            width: 500px;
        }
        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>
  <title>Duckie Land</title>
</head>
<body>
<div class="container">

<section class="header" id="header">
    <header>
        <h1>Duckie Land</h1>
    </header>
</section>
    
<h2>Shopping Cart</h2>
    <?php 
        include ("dbconnect.php");
        $query = "SELECT * FROM duckies";
        $result = mysqli_query($conn, $query);    
    
        session_start();
        $quantity = 0;
        $price = 0;
        echo "<table>";
        echo "<tr>";
        echo "<th> Item </th>";
        echo "<th> Quantity </th>";
        echo "<th> Price </th>";
        echo "</tr>";
        $row = mysqli_fetch_row($result);
        if ($_SESSION["flowerpower_quantity"]) {
            echo "<tr>";
            echo "<td> Flower Power Duckie </td>";
            echo "<td> " . $_SESSION["flowerpower_quantity"] . "</td>";
            echo "<td> $" . number_format($row[2] * $_SESSION["flowerpower_quantity"], 2) . "</td>";
            echo "</tr>";
            $quantity += $_SESSION["flowerpower_quantity"];
            $price += $row[2] * $_SESSION["flowerpower_quantity"];
        }
    $row = mysqli_fetch_row($result);
     if ($_SESSION["graduate_quantity"]) {
            echo "<tr>";
            echo "<td> Graduate Duckie </td>";
            echo "<td> " . $_SESSION["graduate_quantity"] . "</td>";
            echo "<td> $" . number_format($row[2] * $_SESSION["graduate_quantity"], 2) . "</td>";
            echo "</tr>";
            $quantity += $_SESSION["graduate_quantity"];
            $price += $row[2] * $_SESSION["graduate_quantity"];
        }
    $row = mysqli_fetch_row($result);
     if ($_SESSION["firefighter_quantity"]) {
            echo "<tr>";
            echo "<td> Firefighter Duckie </td>";
            echo "<td> " . $_SESSION["firefighter_quantity"] . "</td>";
            echo "<td> $" . number_format($row[2] * $_SESSION["firefighter_quantity"], 2) . "</td>";
            echo "</tr>";
            $quantity += $_SESSION["firefighter_quantity"];
            $price += $row[2] * $_SESSION["firefighter_quantity"];
        }
    $row = mysqli_fetch_row($result);
     if ($_SESSION["surgeonnurse_quantity"]) {
            echo "<tr>";
            echo "<td> Surgeon nurse Duckie </td>";
            echo "<td> " . $_SESSION["surgeonnurse_quantity"] . "</td>";
            echo "<td> $" . number_format($row[2] * $_SESSION["surgeonnurse_quantity"], 2) . "</td>";
            echo "</tr>";
            $quantity += $_SESSION["surgeonnurse_quantity"];
            $price += $row[2] * $_SESSION["surgeonnurse_quantity"];
        }
    $row = mysqli_fetch_row($result);
     if ($_SESSION["unicorn_quantity"]) {
            echo "<tr>";
            echo "<td> Unicorn Duckie </td>";
            echo "<td> " . $_SESSION["unicorn_quantity"] . "</td>";
            echo "<td> $" . number_format($row[2] * $_SESSION["unicorn_quantity"], 2) . "</td>";
            echo "</tr>";
            $quantity += $_SESSION["unicorn_quantity"];
            $price +=$row[2] * $_SESSION["unicorn_quantity"];
        }
        echo "<tr>";
        echo "<th>Total</th>";
        echo "<th>" . $quantity . "</th>";
        echo "<th> $" . number_format($price, 2) . "</th>";
        echo "</tr>";
        echo "</table>";
        $_SESSION["price"] = $price;
    ?>
    <form action="checkout.php" method="post">
        <select name="currency">
            <option value="">Choose alternate currency</option>
            <option value="AUD">AUD</option>
            <option value="CAD">CAD</option>
            <option value="CNY">CNY</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
        </select>
        <input type="submit" value="Checkout">
    </form>
    
    <br>
<?php 
    //echo "Thank you" + $_GET["username"]

?>
    
    
</div><!-- content container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>