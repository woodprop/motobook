<?php


namespace app\controllers;


use app\models\Bike;

class BikeController extends AppController
{
    public function actionView($slug)
    {
        $model = Bike::find()->where(['slug' => $slug])->one();
        return $this->render('view', compact('model'));
    }
}