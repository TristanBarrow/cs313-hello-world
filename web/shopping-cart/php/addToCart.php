<?php
  require("./Item-class.php");
  require("../cradle/items.php");

  // foreach ($items as $item) {
  //   echo $item->getName();
  // }
  sessionstart();
  $json = json_decode(file_get_contents('php://input'), true);
  $_SESSION["cart"] = $json;
  foreach ($json as $j) {
    echo $j['name'] . " " . $j['count'];
  }

?>