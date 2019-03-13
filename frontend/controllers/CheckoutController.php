<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 25.02.2019
 * Time: 18:44
 */

namespace frontend\controllers;


use yii\web\Controller;

class CheckoutController extends Controller
{
public function actionCheckout(){
    return $this->render('checkout');
}
}