<?php

namespace app\models;

use yii\db\ActiveRecord;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {        
        return Good::find()->asArray()->all();
    }

}
