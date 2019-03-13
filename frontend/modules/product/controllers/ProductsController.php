<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 10.03.2019
 * Time: 12:24
 */

namespace frontend\controllers;


use yii\web\Controller;

class ProductsController extends Controller
{
public function actinonProduct(){
    return $this->render('product');
}
}