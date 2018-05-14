<?php
  require("./Item-class.php");
  require("../cradle/items.php");


  $json = json_decode(file_get_contents('php://input'), true);
  foreach ($json as $j) {
    echo $j['name'] . " " . $j['count'];
  }
  session_start();
  $_SESSION["cart"] = $json;
  $_SESSION["test"] = "This will be the Add To Cart Page as soon a as I can parse the Session Varible"; 
?>