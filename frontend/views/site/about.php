<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products">
    <div class="container">
        <div class="site-about">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>This is the About page. You may modify the following file to customize its content:</p>

            <code><?= __FILE__ ?></code>
        </div>
        <?php
        if(Yii::$app->session->hasFlash('alerts')){
            foreach ($alerts as $alert){
                echo \yii\bootstrap\Alert::widget([
                    'options' => ['class' => 'alert-info'],
                    'body' => $alert,
                ]);
            }
        }


        ?>
    </div>
</div>
<div id="my-button">Send ajax</div>
<div class="data">

</div>