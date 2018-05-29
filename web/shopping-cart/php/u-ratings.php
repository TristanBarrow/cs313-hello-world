<?php
  function MatIcon($icon) {
    echo "<i class='material-icons'>" . $icon . "</i>";
  }
  
  function showStars($stars){
    for ($i = 0; $i < 5; $i++) {
      if ($i >= $stars) {
        echo MatIcon("star_border");
      } else {
        echo MatIcon("star");
      }
      
    }
  }
?>