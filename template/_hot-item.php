
 <?php
     ob_start();
    shuffle($product_shuffle);
  ?>    

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (isset($_POST['btn'])) {
            $item_id =  $_POST["item_id"];
            $cart->setData($item_id);
            function page_redirect($location)
            {
                header("Refresh:0");
                exit; 
            }
            page_redirect("index.php");       
    }
    }
  ?>
  
  <!-- hot Item -->
  <section id="hottest-item" class="mt-3">
    <div class="container">
        <h5 class="font-nanumgothic font-weight-medium">인기상품</h5>
        <hr />
        <div class="owl-carousel owl-theme">
            <?php 
                foreach ($product_shuffle as $row){?>  
                
            <div class="item py-2 text-center">
               <a href="product.php?id=<?php echo $row["id"] ?>">
               <img src="<?php echo $row["item_img"] ?>" alt="phone" class="img-fluid" />
                <h6><?php echo $row["item_name"]?></h6>
                <div class="rating my-2 text-warning font-size-12">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="far fa-star" aria-hidden="true"></i>
                </div>
                <span class="color-primary font-weight-bold"><?php echo number_format($row["item_price"]) ?>원</span>
                <small class="text-muted color-aaa"
                ><del><?php echo number_format($row["item_originalprice"]) ?>원</del></small
                >
               </a>
                <br>
                <form  method="post">
                    <input type="hidden" name="item_id" value="<?php echo $row["id"]?>">
                    <?php if (in_array($row["id"], $cart->getId($cart->getData()))) {?>
                        <button
                    type="submit"
                    name="btn"
                    class="btn btn-success  font-weight-bold opacity-8 py-1 my-2 "
                    disabled
                    onclick="location.href='cart.php';"
                    >
                    <a href="cart.php" class="text-white font-size-12">장바구니 가기</a>
                    </button>
                    <?php } else{?>
                        <button
                    type="submit"
                    name="btn"
                    class="btn color-yellow-bg font-weight-bold opacity-8 py-1 my-2 font-size-12"
                    style="height:34px;"
                    >
                    장바구니 추가
                    </button>
                    <?php } ?>
                </form>
            </div>
            <?php }?>
        </div>
    </div>
    <hr class="my-3 invisible" />
    </section>
