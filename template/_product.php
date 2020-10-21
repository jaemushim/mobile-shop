     <!-- Product -->
     <?php 
      foreach($product->getData() as $row){ 
        if ($row["id"] == $_GET['id']){?>
          <section class="product mt-5">
            <div class="container">
              <div class="row">
                <div class="col-6">
                  <img src="<?php echo $row["item_img"] ?>" class="img-fluid" alt="" />
                </div>
                <div class="col-6">
                  <h6 class="mb-4 font-size-12f50c20">
                    <?php echo $row["item_name"] ?>
                  </h6>
                  <hr />
                  <table
                    class="product-info table table-borderless font-size-12 color-555"
                  >
                    <tbody>
                      <tr>
                        <th scope="row">상품명</th>
                        <td colspan="3">
                          <h6 class="font font-weight-bold">
                          <?php echo $row["item_name"] ?>
                          </h6>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">제조사</th>
                        <td colspan="2"><?php echo $row["item_brand"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">소비자가</th>
                        <td colspan="2"><del><?php echo number_format($row["item_price"]) ?>원</del></td>
                      </tr>
                      <tr>
                        <th scope="row" class="font-weight-bold font-size-16">
                          판매가
                        </th>
                        <td colspan="2" class="font-weight-bold font-size-16">
                          &#8361;<?php echo number_format($row["item_originalprice"]) ?>원
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">모델</th>
                        <td colspan="2"><?php echo $row["item_model"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row" class="color-red">안내사항</th>
                        <td colspan="2" class="color-red">
                        <?php echo $row["item_feature"] ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr />
                  <p class="font-size-14">수량 : </p>
                  <div class="qty d-flex">
                    <buntton class="qty-down" type="button"></buntton>
                    <input type="" class="qty-input" value="1" name="" disabled="disabled" />
                    <buntton class="qty-up"></buntton>
                  </div>
                  <hr class="border-dark" />
                  <div class="form-group">
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
                </div>
                <div class="col-12 mt-5">
                  <h6>상품 상세정보</h6>
                  <hr />
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum
                    inventore autem soluta id, laudantium saepe ipsum laborum, velit
                    nulla aliquid voluptas! Doloremque saepe perspiciatis doloribus
                    inventore alias sunt ratione ab ipsum reiciendis aspernatur
                    repellat rerum aliquid, pariatur, repudiandae, tempore eveniet.
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                    ratione perferendis, dolorum cumque hic, vitae quaerat ipsa
                    recusandae dicta autem assumenda in aperiam pariatur sapiente?
                    Delectus quibusdam, doloribus consectetur fuga consequatur,
                    maxime, dignissimos error perspiciatis unde quo illo libero!
                    Quis dolorum consequatur, aliquid assumenda totam nobis
                    laudantium?
                  </p>
                </div>
              </div>
            </div>
          </section>
        
        <?php
        }
        }?>
    