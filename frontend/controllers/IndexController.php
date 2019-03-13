<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 03.03.2019
 * Time: 13:22
 */

namespace frontend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
public function actionIndex(){
    return $this->render('index');
}
}