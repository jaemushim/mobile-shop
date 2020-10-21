<?php
  @include ('../database/DBController.php');
?>
<?php
  @include ('../database/product.php');
?>

<?php
// Instantiadte DBController
$DB = new DBController();
?>
     
<?php
//  Instantiadte product
$product = new product($DB);
?>


<?php


if(isset($_POST['item_id'])){
    $result = $product->getDataById($_POST['item_id']);
    
    echo(json_encode($result));
     }
?>