<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (isset($_POST['delete_submit'])) {
             $cart->deleteItem($_POST['item_id']);
    }
    }
  ?>

<!-- Cart -->
<section class="cart my-5">
    <div class="container">
    <h5 class="font-nanumgothic font-weight-medium">장바구니</h5>
        <div class="row">
            <div class="col-9">
            <hr class="my-0 mb-3">
            <?php
  
                foreach ($cart->getData() as $row){
                    $cartRow = $product->getDataById($row['item_id']);
                    $subTotal[] = array_map(function($product_row){ ?>
                <div class="row my-4">
                    <div class="col-2"><img src="<?php echo $product_row["item_img"] ?>" alt="" class="img-fluid"></div>
                    <div class="col-8">
                        <h6 class="font-size-18"><?php echo $product_row["item_brand"] ?> </h6>
                        <p class="font-size-14">수량 : </p>
                        <div class="d-flex">
                        <div class="qty d-flex">
                            <buntton class="qty-down" data-id="<?php echo $product_row["id"] ?>"></buntton>
                            <input type="text" class="qty-input bg-light p-0" data-id = <?php echo $product_row["id"] ?> value="1" name="" />
                            <buntton class="qty-up" data-id="<?php echo $product_row["id"] ?>"></buntton>
                            <form method="post">
                                <input type="hidden" id="item_id" name="item_id" value="<?php echo $product_row["id"] ?>">
                                <input type="submit" class="border-0 bg-transparent text-danger ml-2" value="Delete" name="delete_submit"></button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <h5 class="col-2 text-right font-size-14"><span class="mr-3 product_price" data-id = <?php echo $product_row["id"] ?>><?php echo number_format($product_row["item_price"]) ?></span>원</h5>
                </div>    
            <?php
            return $product_row['item_price'];
             },$cartRow);  
            }
            ?>        
            </div>
            <div class="col-3 ">   
                <div class="sub-total text-center border">
                <div class="sub-total p-3 border-bottom text-success ">
                    <h6><i class="fas fa-check small"></i>Lorem ipsum dolor sit amet.</h6>
                </div>
                <div class="p-4"><h6 >합계 : <span id="subtotal"><?php echo number_format($cart->subTotal($subTotal))?> </span>원</h6>
                    <div class="btn btn-primary color-yellow-bg mt-2 border-0 color-333 font-size-12 font-weight-bold">
                        구매하기
                    </div>
                </div>    
                </div>
            </div>  
        </div>
        
    </div>
</section>