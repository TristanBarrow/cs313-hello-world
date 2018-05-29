<?php
  class Item {
    public $_name;
    public $_cost;
    public $_rating;
    public function __construct($name, $cost, $rating) {
      $this->_name = $name;
      $this->_cost = $cost;
      $this->_rating = $rating;
    }
    public function getName() {
      return $this->_name;
    }
    public function getCost() {
      return $this->_cost;
    }
    public function getRating() {
      return $this->_rating;
    }
    public function getTotalPrice($count) {
      return $count * $this->getCost();
    }
    public function display_cart_item($count){
      $c_title = $this->getName();
      $c_count = $count;
      $c_price = $this->_cost;
      $c_total = $this->getCost() * $count;
      require("./cart-item.php");
    }
  }
?>