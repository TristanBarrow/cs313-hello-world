<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='../js/script.js'></script>
  <title>Items</title>
</head>
<body>
  <div class='items'>
  <?php
    session_start();
    require("./Item-class.php");
    require("../cradle/items.php");
    require("./u-ratings.php");
    foreach ($items as $item) {
      require("./item.php");
    }
    
  ?> 

  </div>
  <button onclick="onSubmit()">Go to Cart</button>
</body>
</html>

