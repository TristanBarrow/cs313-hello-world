<?php 
  $links = array(
    './php/hello-world.php' => 'Hello World',
  );

  foreach ($links AS $href => $text) {
    echo "<a class='links__link' href='";
    echo $href;
    echo "'>";
    echo $text;
    echo "</a>";
  }
?>
