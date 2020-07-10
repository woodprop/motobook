<?php


namespace app\models;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{
    public static function tableName()
    {
        return 'brands';
    }

    public function getBikes()
    {
        return $this->hasMany(Bike::class, ['brand_id' => 'id']);
    }
}