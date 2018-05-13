<div class="item">
  <div class="item__title">Item: <?php  echo $item->getName();   ?></div>
  <div class="item__price">Price: $<?php  echo number_format($item->getCost(), 2, ".", ","); ?></div>
  <div class="item__rating"><?php echo showStars($item->getRating()); ?></div>
  <div id="item-count-<?php echo $item->getName(); ?>" class="item__count">0</div>
  <button onclick="addItem('<?php echo $item->getName(); ?>')">Add Item</button>
  <button onclick="subItem('<?php echo $item->getName(); ?>')">Sub Item</button>
</div>