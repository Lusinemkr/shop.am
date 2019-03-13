<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 25.02.2019
 * Time: 18:38
 */

namespace frontend\controllers;


use yii\web\Controller;

class cartController extends Controller
{
public function actionCart(){
    return $this->render('cart');
}
}