<?php
    shuffle($product_shuffle);
  ?>

<!-- Special Price -->
<section id="special-price" class="mt-3">
    <hr class="my-4 invisible" />
    <div class="container">
        <h5 class="font-nanumgothic font-weight-medium d-inline-block">
        특가상품
        </h5>
        <div
        class="button-group filter-button-group d-inline-block text-right ml-auto"
        style="width: 92%"
        ;
        >
        <button class="btn is-checked color-777" data-filter="*">
            ALL
        </button>
        <button class="btn color-777" data-filter=".samsung">삼성</button>
        <button class="btn color-777" data-filter=".apple">애플</button>
        <button class="btn color-777" data-filter=".lg">LG</button>
        </div>

        <div class="grid">
            <?php foreach ($product_shuffle as $row){?>  
            <div class="grid-item <?php echo $row["item_brand"] ?>" >    
                <div class="item py-2 text-center border">
                <a href="">
                <img src="<?php echo $row["item_img"] ?>" alt="phone" class="img-fluid" />
                <h6><?php echo $row["item_name"]?></h6>
                <div class="rating my-2 text-warning font-size-12">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="far fa-star" aria-hidden="true"></i>
                </div>
                <span class="color-primary font-weight-bold"><?php echo number_format($row["item_price"])?>원</span>
                <small class="text-muted color-aaa"
                    ><del><?php echo number_format($row["item_originalprice"]) ?></del></del></small
                >
                </a>
                <br> 
                <button
                    type="button"
                    class="btn color-yellow-bg font-weight-bold opacity-8 py-1 my-2 font-size-12"
                >
                    장바구니
                    <i
                    class="fa fa-plus font-size-8 color-333"
                    aria-hidden="true"
                    ></i>
                </button>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
