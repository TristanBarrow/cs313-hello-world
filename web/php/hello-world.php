<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello World</title>
</head>
<body>
  <?php 
    for ($x = 0; $x < 10; $x++) {
      echo "<div";
      if ($x % 2 == 0) {
        echo " style='color:red'";
      }
      echo ">mydiv$x</div>";
    }
  ?>
</body>
</html>