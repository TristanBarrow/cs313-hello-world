<div class="cart_item">
  <div class="cart_item__title">Item: <?php echo $c_title; ?></div>
  <div class="cart_item__count">Qty: <?php echo $c_count; ?></div>
  <div class="cart_item__price">Price: $<?php echo number_format($c_price, 2, ".", ","); ?> </div>
  <hr>
  <div class="cart_item__total">Total: $<?php echo number_format($c_total, 2, ".", ","); ?></div>
</div>