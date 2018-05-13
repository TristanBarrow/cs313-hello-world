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
    public function getName(){
      return $this->_name;
    }
    public function getCost(){
      return $this->_cost;
    }
    public function getRating(){
      return $this->_rating;
    }
  }
?>