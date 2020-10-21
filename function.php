<?php
  @include ('database/DBController.php');
?>
<?php
  @include ('database/product.php');
?>
<?php
  @include ('database/cart.php');
?>
          

<!-- Instantiadte DBController -->
<?php
$DB = new DBController();
?>
     
<!-- Instantiadte product -->
<?php
$product = new product($DB);
$product_shuffle = $product->getData();
?>


<!-- Instantiadte cart -->
<?php
$cart = new cart($DB);
?>

