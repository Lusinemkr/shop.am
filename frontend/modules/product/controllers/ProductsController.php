<?php
/**
 * Created by PhpStorm.
 * User: ghost
 * Date: 2/13/19
 * Time: 8:37 PM
 */

namespace frontend\modules\product\controllers;

use frontend\modules\product\models\Products;
use frontend\modules\product\models\Reviews;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class ProductsController extends Controller
{

    public function actionIndex($cat_id = 0,$brand_id = 0){

        $products = Products::find()->with(['cat','brand','reviews','variants','images']);
        $s = Yii::$app->request->get('s');
        if(!empty($s)){
            $products = $products->where(['LIKE','title',$s]);
        }else{
            if(!empty($cat_id) && !empty($brand_id)){
                $products = $products->where(['cat_id' => $cat_id,'brand_id' => $brand_id]);
            }else{
                if($cat_id){
                    $products = $products->where(['cat_id' => $cat_id]);
                }
                if($brand_id){
                    $products = $products->where(['brand_id' => $brand_id]);
                }
            }
        }

        //$command = Yii::$app->db->createCommand($products)->sql;
//        $query = new Query();
//        $query->select('*')
//            ->from('product')
//            ->limit(10);
//// build and execute the query
//        $rows = $query->all();


        $pagination = new Pagination(['totalCount' => $products->count(),'pageSize' => 9]);
        $products = $products->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

        return $this->render('index',['products' => $products,'pagination' => $pagination]);
    }

    public function actionProduct($slug){

        $product = Products::find()->where(['slug' => $slug])
            ->with(['cat','brand','reviews' => function ($product){
                $product->with(['user'=>function($product){
                    // $product->with('comments');
                }]);
            },'variants','images'])
            ->asArray()->one();
//        echo "<pre>";
//        print_r($product);
//        die;

        if(empty($product)){
            throw new NotFoundHttpException('Product do not exists');
        }
        $id = $product['id'];

        $product_review = Reviews::find()->where(['prod_id' => $id])->average('rate');
        $model = new Reviews();
        $model->user_id = Yii::$app->user->id;
        $model->prod_id = $id;
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->refresh();
        }
        return $this->render('product',['product' => $product,'review' => $product_review, 'model' => $model]);
    }
}
