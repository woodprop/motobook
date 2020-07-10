<?php


namespace app\controllers;


use app\models\Brand;

class BrandController extends AppController
{
    public function actionIndex()
    {
        $model = Brand::find()->all();
        return $this->render('index', compact('model'));
    }


    public function actionView($slug)
    {
        $model = Brand::find()->where(['slug' => $slug])->one();
//        var_dump($model);
//        die();
        return $this->render('view', compact('model'));
    }
}