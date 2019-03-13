<div class="products">
    <div class="container">
        <div class="row products_row">
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <h3><?= $article['title']?></h3>
                        <!-- Post content -->
                        <div class="col-md-12">
                            <div class="section-row sticky-container">
                                <div class="main-post">
                                    <p><?= $article['content']?></p>
                                </div>
                                <div>
                                    <?php
                                    if(!empty($article['comments'])){
                                        ?>
                                        <ul>
                                            <?php
                                            foreach ($article['comments'] as $comment){
                                                ?>
                                                <li style="border:1px solid">
                                                    <span><?= $comment['user']['username'];?></span>
                                                    <div><?= $comment['message'];?></div>
                                                    <div><?= date('F j,Y - H:i:s',strtotime($comment['created_at']));?></div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }

                                    if(!Yii::$app->user->isGuest){
                                        $form = \yii\bootstrap\ActiveForm::begin();
                                        echo $form->field($model,'message')->textarea();
                                        echo \yii\helpers\Html::submitButton('Send',['class' => 'btn']);
                                        \yii\bootstrap\ActiveForm::end();
                                    }

                                    ?>
                                </div>
                            </div>

                        </div>
                        <!-- /Post content -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
        </div>
    </div>
</div>
