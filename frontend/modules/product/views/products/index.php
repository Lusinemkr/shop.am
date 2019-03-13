<?php

use yii\helpers\Url;
?>
<div class="products">
    <div class="container">
        <div class="row products_row">
            <?php
            if(!empty($products)){
                foreach ($products as $product){
                    ?>
                    <!-- Product -->
                    <div class="col-xl-4 col-md-6">
                        <div class="product">
                            <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product/<?= $product['id']?>"><?= $product['title']?></a></div>
                                            <div class="product_category">In <a href="<?= \yii\helpers\Url::to(['/category/'.$product['cat']['id']])?>"><?= $product['cat']['title']?></a></div>
                                            <div class="product_category">In <a href="<?= \yii\helpers\Url::to(['/brands/'.$product['brand']['id']])?>"><?= $product['brand']['title']?></a> Brand</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <?php
                                        if(!empty($product['sale_price'])){
                                            ?>
                                            <div class="product_price text-right">$ <span style="text-decoration: line-through"><?= $product['price'];?></span> <span><?= $product['sale_price'];?></span></div>

                                            <?php
                                        }else{
                                            ?>
                                            <div class="product_price text-right">$ <?= $product['price'];?></div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="<?= \yii\helpers\Url::to('@web/images/heart_2.svg')?>" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                echo \yii\widgets\LinkPager::widget(['pagination' => $pagination]);
            }
            ?>

        </div>
    </div>

</div>