<div class="products">
    <div class="container">
        <div class="row products_row">
            <?php

            if(!empty($articles)){
                foreach ($articles as $article){
                    ?>
                    <!-- post -->
                    <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href="<?= \yii\helpers\Url::to(['/blog/article/'.$article['id']]);?>">
                                <img src="web/images/post-2.jpg" alt="">
                            </a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-1" href="<?= \yii\helpers\Url::to(['/blog/article/'.$article['id']]);?>"><?= $article['title'];?></a>
                                    <span class="post-date"><?= date('j F, Y', strtotime($article['created_at']));?></span>
                                </div>
                                <h3 class="post-title">
                                    <?= substr($article['content'],0,120);?>
                                    <a href="<?= \yii\helpers\Url::to(['/blog/article/'.$article['id']]);?>">read more</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->
                    <?php
                }

            }?>
        </div>
    </div>
</div>
