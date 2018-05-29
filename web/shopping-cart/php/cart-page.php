<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/index.css">
  <title>Cart</title>
</head>
<body>
  <div class='cart__title'>Cart</div>
  
  <?php
    session_start();
    require("./Item-class.php");
    require("../cradle/items.php");
    $json = json_decode($_SESSION["cart"]);
    $total = 0;
    foreach ($items as $item) {
      foreach ($json as $j) {
        if ($j->name == $item->getName()){
          $item->display_cart_item($j->count);
          $total += $item->getTotalPrice($j->count);
        }
      }
    }
  ?>
    <h1 class='cart__total-cost'><?php 

      if ($total > 0){
        echo "Total Cost: $" . number_format($total, 2, ".", ",");   
      } else {
        echo "Your Cart is Empty";
      }
      
    ?></h1>
    <button class='cart__buy'>BUY</button>

</body>
</html>