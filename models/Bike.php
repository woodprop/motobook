<?php


namespace app\models;


use yii\db\ActiveRecord;

class Bike extends ActiveRecord
{
    public static function tableName()
    {
        return 'bikes';
    }
}