<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 04.03.2019
 * Time: 18:35
 */

namespace frontend\controllers;


use app\models\Comments;
use yii\web\Controller;

class CommentsController extends Controller
{
    public function actionComments(){
        $comments=Comments::find()->asArray()->all();
        return $this->render('comments');
    }

}