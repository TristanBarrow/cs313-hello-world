<?php 
  $links = array(
    './php/hello-world.php' => 'Hello World',
    './shopping-cart/php/items-page.php' => 'Shopping Cart'
  );




  foreach ($links AS $href => $text) {
    echo "<a class='links__link' href='";
    echo $href;
    echo "'>";
    echo $text;
    echo "</a>";
  }
?>
