<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 25.02.2019
 * Time: 18:38
 */

namespace frontend\controllers;


use yii\web\Controller;

class categoriesController extends Controller
{
public function actionCategories(){
    return $this->render('categories');
}
}