<?php
  class Attribute {
    public $_name;
    public $_value;
    public function __construct($name, $value){
      $this->_name = $name;
      $this->_value = $value;
    }

    public function getDisplay() {
      return " " . $this->_name . "=\"" . $this->_value . "\"";
    }

    public function setValue($value) {
      $this->_value = $value;
    }
  }


  class Tag {
    public $_tag;
    public $_attributes;
    public $_content;

    public function __construct($tag, $attributes, $content){
      $this->_tag = $tag;
      $this->_attributes = $attributes;
      $this->_content = $content;
    }
    
    public function getDisplay() {
      $disp = "<" . $this->_tag;
      if (is_array($this->_attributes)) {
        foreach ($this->_attributes as $attribute) {
          $attribute->getDisplay();
        }
      } else {
        $this->_attributes->getDisplay();
      }

      $disp = $disp . $this->_attributes->getDisplay();
      $disp = $disp . ">" . $this->_content . "<" . $this->_tag . ">";
      
      return $disp;
    }
  }

  $class = new Attribute("class", "test-class");

  $p = new Tag("p", $class, "This is in a p tag");

  echo $p->getDisplay();

?>